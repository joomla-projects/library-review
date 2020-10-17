<?php

declare(strict_types=1);

namespace App\LibraryReview;

use Reflection;
use ReflectionClass;
use ReflectionClassConstant;
use ReflectionMethod;
use ReflectionNamedType;
use ReflectionParameter;
use ReflectionProperty;
use Twig\Environment;
use Twig\TwigFunction;

class TwigExtensions
{
    /**
     * @var array
     */
    private static $context;

    /**
     * Add the methods of this class to the Twig environment
     *
     * @param Environment $twig
     *
     * @return void
     */
    public static function extend(Environment $twig): void
    {
        foreach (get_class_methods(self::class) as $method) {
            $twig->addFunction(
                new TwigFunction(
                    $method,
                    [self::class, $method]
                )
            );
        }
    }

    /**
     * Set the context (class, uses)
     *
     * @param array $context
     */
    public static function setContext(array $context): void
    {
        self::$context = $context;
    }

    /**
     * Get the return type
     *
     * @param             $node
     * @param string|null $mode
     *
     * @return string|null
     */
    public static function type($node, ?string $mode = null): ?string
    {
        if ($node instanceof ReflectionParameter) {
            $type = $node->getType();

            if ($type instanceof ReflectionNamedType) {
                return self::namespace($type->getName(), $node->getDeclaringClass());
            }

            return self::getParamTypeFromDocblock($node, $mode);
        }

        if ($node instanceof ReflectionMethod) {
            if ($node->hasReturnType()) {
                $type = $node->getReturnType();

                if ($type instanceof ReflectionNamedType) {
                    return self::namespace($type->getName(), $node->getDeclaringClass());
                }
            }

            return self::getReturnTypeFromDocblock($node, $mode);
        }

        if ($node instanceof ReflectionClassConstant) {
            $value = $node->getValue();

            return is_object($value) ? get_class($value) : self::cleanType(gettype($value));
        }
    }

    public static function description($node, ?string $subset = null)
    {
        if ($node instanceof ReflectionParameter) {
            $method   = $node->getDeclaringFunction();
            $docblock = self::parseComment($method->getDocComment() ?: null, $method->getDeclaringClass());

            return $docblock['param'][$node->getName()]['description'] ?? '';
        }

        if ($node instanceof ReflectionProperty) {
            $docblock = self::parseComment($node->getDocComment() ?: null, $node->getDeclaringClass());

            return $docblock['var']['description'] ?? '';
        }

        if ($node instanceof ReflectionClassConstant) {
            $docblock = self::parseComment($node->getDocComment() ?: null, $node->getDeclaringClass());

            return $docblock['var']['description'] ?? $docblock['description'] ?? '';
        }

        if ($node instanceof ReflectionMethod) {
            $docblock = self::parseComment($node->getDocComment() ?: null, $node->getDeclaringClass());

            if ($subset === 'return') {
                return $docblock['return']['description'] ?? null;
            }

            $description = trim($docblock['description']);
            $description = preg_replace('~<pre>(.*?)</pre>~', "```php\n$1\n```\n", $description);

            return $description;
        }

        if ($node instanceof ReflectionClass) {
            $docblock    = self::parseComment($node->getDocComment() ?: null, $node);
            $description = trim($docblock['description']);
            $description = preg_replace('~<pre>(.*?)</pre>~', "```php\n$1\n```\n", $description);

            return $description;
        }

        return '**** Unknown node type ' . (is_object($node) ? get_class($node) : gettype($node)) . ' ****';
    }

    /**
     * @param ReflectionMethod $method
     *
     * @return array
     */
    public static function exceptions(ReflectionMethod $method): array
    {
        $docblock = self::parseComment($method->getDocComment() ?: null, $method->getDeclaringClass());

        return $docblock['throws'] ?? [];
    }

    /**
     * @param ReflectionClass $class
     *
     * @return bool
     */
    public static function hasConstants(ReflectionClass $class): bool
    {
        $constants = $class->getReflectionConstants();

        foreach ($constants as $constant) {
            if (!$constant->isPrivate()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param ReflectionClass $class
     *
     * @return bool
     */
    public static function hasProperties(ReflectionClass $class): bool
    {
        $properties = $class->getProperties();

        foreach ($properties as $property) {
            if (!$property->isPrivate()) {
                return true;
            }
        }

        $docblock = self::parseComment($class->getDocComment() ?: null, $class);

        if (isset($docblock['property-read'])) {
            return true;
        }

        return false;
    }

    /**
     * @param ReflectionClass $class
     *
     * @return bool
     */
    public static function hasMethods(ReflectionClass $class): bool
    {
        $methods = $class->getMethods();

        foreach ($methods as $method) {
            if (!$method->isPrivate()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param  $node
     *
     * @return bool
     */
    public static function isDeprecated($node): bool
    {
        if ($node instanceof ReflectionMethod) {
            if ($node->isDeprecated()) {
                return true;
            }

            $declaringClass = $node->getDeclaringClass();
        } else {
            $declaringClass = $node;
        }

        $docblock = self::parseComment($node->getDocComment() ?: null, $declaringClass);

        return isset($docblock['deprecated']);
    }

    public static function value($node)
    {
        if ($node instanceof ReflectionParameter) {
            try {
                // Suppress warning in case the value is an undefined constant
                $value = @$node->getDefaultValue();
            } catch (\ReflectionException $e) {
                $value = null;
            }
        } elseif ($node instanceof ReflectionClassConstant) {
            $value = $node->getValue();
        } else {
            $value = $node;
        }

        if (is_array($value)) {
            array_walk(
                $value,
                function (&$val) {
                    $val = self::value($val);
                }
            );

            return str_replace('[  ]', '[]', '[ ' . implode(', ', $value) . ' ]');
        }

        if (is_string($value)) {
            return '\'' . str_replace('\'', '\\\'', $value) . '\'';
        }

        if ($value === null) {
            return 'null';
        }
        if ($value === true) {
            return 'true';
        }
        if ($value === false) {
            return 'false';
        }

        return $value;
    }

    /**
     * @param $node
     *
     * @return string
     */
    public static function modifiers($node): string
    {
        $modifiers = implode(' ', Reflection::getModifierNames($node->getModifiers()));

        if ($node instanceof ReflectionProperty) {
            $class    = $node->getDeclaringClass();
            $docblock = self::parseComment($class->getDocComment() ?: null, $class);

            if (isset($docblock['propertyread'][$node->getName()])) {
                $modifiers = str_replace(['public', 'protected', 'private'], 'read-only', $modifiers);
            }
        }

        return $modifiers;
    }

    /**
     * @param ReflectionProperty $property
     *
     * @return bool
     */
    public static function isAccessible(ReflectionProperty $property): bool
    {
        $modifiers = self::modifiers($property);
        return strpos($modifiers, 'private') === false;
    }

    /**
     * Get title, description and annotations from a docblock
     *
     * @param string|null     $docComment
     * @param ReflectionClass $declaringClass
     *
     * @return array
     */
    public static function parseComment(?string $docComment, ReflectionClass $declaringClass): array
    {
        if ($docComment === null) {
            return [
                'title'       => '',
                'description' => '',
            ];
        }

        $comment           = self::getDocblockContent($docComment);
        $result['comment'] = $comment;

        if (!empty($comment) && $comment[0] !== '@') {
            [$title, $comment] = explode("\n", $comment . "\n", 2);
        } else {
            $title = '';
        }
        $result['title']       = trim($title);
        $result['description'] = trim($title) . "\n\n";

        $lines = explode("\n", $comment);

        $collector = &$result['description'];

        foreach ($lines as $line) {
            $line = trim($line);

            if ($line === '') {
                $collector .= "\n";
                continue;
            }

            if ($line[0] !== '@') {
                $collector .= $line . "\n";
                continue;
            }

            if (!preg_match('~@(\S+)\s+(.*)~', $line, $match)) {
                // It is a standalone tag without further information, just count
                $result[$line] = ($result[$line] ?? 0) + 1;
                continue;
            }

            $match[1] = str_replace('-', '', $match[1]);

            switch ($match[1]) {
                case 'param':
                case 'propertyread':
                    [$type, $var, $desc] = preg_split('~\s+~', trim($match[2]) . ' ', 3);
                    $var                     = ltrim($var, '$');
                    $result[$match[1]][$var] = [
                        'name'        => $var,
                        'type'        => self::namespace($type, $declaringClass),
                        'description' => $desc . "\n",
                    ];

                    $collector = &$result[$match[1]][$var]['description'];
                    break;

                case 'return':
                    [$type, $desc] = preg_split('~\s+~', trim($match[2]) . ' ', 2);
                    $result[$match[1]] = [
                        'type'        => self::namespace($type, $declaringClass),
                        'description' => $desc . "\n",
                    ];

                    $collector = &$result[$match[1]]['description'];
                    break;

                case 'throws':
                    [$type, $desc] = preg_split('~\s+~', trim($match[2]) . ' ', 2);
                    $result[$match[1]][$match[2]] = [
                        'type'        => self::namespace($type, $declaringClass),
                        'description' => $desc . "\n",
                    ];

                    $collector = &$result[$match[1]][$match[2]]['description'];
                    break;

                case 'var':
                    [$type, $desc] = preg_split('~\s+~', trim($match[2]) . ' ', 2);
                    $result[$match[1]] = [
                        'type'        => self::namespace($type, $declaringClass),
                        'description' => ($desc ?: $result['title']) . "\n",
                    ];

                    $collector = &$result[$match[1]]['description'];
                    break;

                case 'deprecated':
                    [$version, $desc] = preg_split('~\s+~', trim($match[2]) . ' ', 2);
                    $result[$match[1]] = [
                        'version'     => $version,
                        'description' => $desc,
                    ];

                    $collector = &$result[$match[1]]['description'];
                    break;

                default:
                    $result[$match[1]] = $match[2] . "\n";

                    $collector = &$result[$match[1]];
                    break;
            }
        }

        return self::trimArray($result);
    }

    /**
     * Get the return type from the method docblock
     *
     * @param ReflectionMethod $method
     * @param string|null      $mode
     *
     * @return string|null
     */
    private static function getReturnTypeFromDocblock(ReflectionMethod $method, ?string $mode): ?string
    {
        $docblock = self::parseComment($method->getDocComment() ?: null, $method->getDeclaringClass());

        $type = $docblock['return']['type'] ?? 'void';

        if ($mode === 'strict') {
            return strpos($type, '|') === false ? $type : null;
        }

        return $type;
    }

    /**
     * Get the declared exceptions
     *
     * @param ReflectionMethod $method
     *
     * @return array
     */
    public static function getExceptions(ReflectionMethod $method): array
    {
        $docblock = self::parseComment($method->getDocComment() ?: null, $method->getDeclaringClass());

        return $docblock['throws'] ?? [];
    }

    /**
     * @param ReflectionMethod|ReflectionClass $method
     * @param string                           $default
     *
     * @return string
     */
    public static function getDocBlock($method, string $default): string
    {
        $docblock = $method->getDocComment();

        if ($docblock === false) {
            $docblock = $default;
        }

        $docblock = preg_replace_callback(
            '~(Magic function|Method)\s+to\s+(\w)~',
            static function ($match) {
                return strtoupper($match[2]);
            },
            $docblock
        );

        return $docblock;
    }

    /**
     * @param $class
     * @param $method
     * @param $samples
     *
     * @return array
     */
    public static function getSamplesFor($class, $method, $samples)
    {
        return $samples[$class . '::' . $method] ?? [];
    }

    public static function dump($var)
    {
        return print_r($var, true);
    }

    /**
     * @param string          $type
     * @param ReflectionClass $declaringClass
     *
     * @param string|null     $mode
     *
     * @return string
     */
    private static function namespace(string $type, ReflectionClass $declaringClass, ?string $mode = null): string
    {
        if (strpos($type, '|') !== false) {
            if ($mode === 'strict') {
                return '';
            }

            return implode(
                '|',
                array_map(
                    function ($item) use ($declaringClass) {
                        return self::namespace($item, $declaringClass);
                    },
                    explode('|', $type)
                )
            );
        }

        if (strpos($type, '\\') !== false) {
            // $type is already namespaced
            return ltrim($type, '\\');
        }

        if (isset(self::$context['uses'][$type])) {
            // $type was declared in a use statement
            return self::$context['uses'][$type];
        }

        if (class_exists($type, false)) {
            // $type is known as a class
            return $type;
        }

        if ($type === ucfirst($type)) {
            // $type starts with a capital letter, so it is a class from this namespace
            return $declaringClass->getNamespaceName() . '\\' . $type;
        }

        // Seems to be a simple type
        return self::cleanType($type);
    }

    /**
     * @param string $docblock
     *
     * @return string
     */
    private static function getDocblockContent(string $docblock): string
    {
        $docblock = preg_replace_callback(
            '~(Magic function|Method)\s+to\s+(\w)~',
            static function ($match) {
                return strtoupper($match[2]);
            },
            $docblock
        );

        return trim(preg_replace('~(/\*\*|\n\s+\* ?|/$)~', "\n", $docblock));
    }

    private static function trimArray($array): array
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = self::trimArray($value);
                continue;
            }

            $array[$key] = is_string($value) ? trim($value) : $value;
        }

        return $array;
    }

    /**
     * Get the parameter type from the method docblock
     *
     * @param ReflectionParameter $parameter
     * @param string|null         $mode
     *
     * @return string|null
     */
    private static function getParamTypeFromDocblock(ReflectionParameter $parameter, ?string $mode = null): ?string
    {
        $method   = $parameter->getDeclaringFunction();
        $docblock = self::parseComment($method->getDocComment() ?: null, $method->getDeclaringClass());

        $type = $docblock['param'][$parameter->getName()]['type'] ?? null;

        if ($type !== null && $mode === 'strict') {
            return strpos($type, '|') === false ? $type : null;
        }

        return $type;
    }

    /**
     * @param string $type
     *
     * @return string|string[]
     */
    private static function cleanType(string $type)
    {
        static $clean = [
            'boolean' => 'bool',
            'integer' => 'int',
        ];

        return str_replace(array_keys($clean), array_values($clean), $type);
    }
}
