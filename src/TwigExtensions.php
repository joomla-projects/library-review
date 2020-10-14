<?php

declare(strict_types=1);

namespace App\LibraryReview;

use ReflectionClass;
use ReflectionMethod;
use ReflectionNamedType;
use Twig\Environment;
use Twig\TwigFunction;

class TwigExtensions
{
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
     * Get the parameter type
     *
     * @param ReflectionMethod $method
     * @param string           $param
     * @param array            $uses
     *
     * @return string|null
     */
    public static function getParamType(ReflectionMethod $method, string $param, array $uses): ?string
    {
        $parameters = $method->getParameters();
        foreach ($parameters as $parameter) {
            if ($parameter->getName() === $param) {
                $type = $parameter->getType();

                if ($type instanceof ReflectionNamedType) {
                    return self::namespace($type->getName(), $method->getDeclaringClass(), $uses);
                }

                return self::getParamTypeFromDocblock($method, $param, $uses);
            }
        }

        return null;
    }

    /**
     * Get the return type
     *
     * @param ReflectionMethod $method
     * @param array            $uses
     *
     * @return string|null
     */
    public static function getReturnType(ReflectionMethod $method, array $uses): ?string
    {
        if ($method->hasReturnType()) {
            $type = $method->getReturnType();

            if ($type instanceof ReflectionNamedType) {
                return self::namespace($type->getName(), $method->getDeclaringClass(), $uses);
            }
        }

        return self::getReturnTypeFromDocblock($method, $uses);
    }

    /**
     * Get the parameter type from the method docblock
     *
     * @param ReflectionMethod $method
     * @param string           $param
     * @param array            $uses
     *
     * @return string|null
     */
    private static function getParamTypeFromDocblock(ReflectionMethod $method, string $param, array $uses): ?string
    {
        preg_match_all(
            '~@param\s+(\S+)\s+\$(\w+)\b~',
            self::getDocBlock($method, ''),
            $matches,
            PREG_SET_ORDER
        );

        foreach ($matches as $match) {
            if ($match[2] === $param) {
                return self::namespace($match[1], $method->getDeclaringClass(), $uses);
            }
        }

        return null;
    }

    /**
     * Get the parameter description from the method docblock
     *
     * @param ReflectionMethod $method
     * @param string           $param
     *
     * @return string|null
     */
    public static function getParamDescription(ReflectionMethod $method, string $param): ?string
    {
        preg_match_all(
            '~@param\s+(\S+)\s+\$(\w+)\s+(.*?)\n~',
            self::getDocBlock($method, 'declared in ' . $method->getDeclaringClass()->getName()),
            $matches,
            PREG_SET_ORDER
        );

        foreach ($matches as $match) {
            if ($match[2] === $param) {
                return rtrim($match[3], '.') . '.';
            }
        }

        return null;
    }

    public static function getDefault(\ReflectionParameter $param)
    {
        $default = $param->getDefaultValue();

        if (is_array($default)) {
            return str_replace('[  ]', '[]', '[ ' . implode(', ', $default) . ' ]');
        }
        if ($default === null) {
            return 'null';
        }
        if ($default === true) {
            return 'true';
        }
        if ($default === false) {
            return 'false';
        }
        if (is_string($default)) {
            return '\'' . str_replace('\'', '\\\'', $default) . '\'';
        }

        return $default;
    }

    /**
     * Get the return type from the method docblock
     *
     * @param ReflectionMethod $method
     * @param array            $uses
     *
     * @return string|null
     */
    private static function getReturnTypeFromDocblock(ReflectionMethod $method, array $uses): ?string
    {
        $isDefined = preg_match(
            '~@return\s+(\S+)\b~',
            self::getDocBlock($method, ''),
            $match
        );

        if ($isDefined) {
            return self::namespace($match[1], $method->getDeclaringClass(), $uses);
        }

        return 'void';
    }

    /**
     * Get the return value description from the method docblock
     *
     * @param ReflectionMethod $method
     *
     * @return string|null
     */
    public static function getReturnDescription(ReflectionMethod $method): ?string
    {
        $isDefined = preg_match(
            '~@return\s+(\S+)\s+(.*?)\n~',
            self::getDocBlock($method, 'undefined'),
            $match
        );

        if ($isDefined) {
            if (trim($match[2]) === '*') {
                return null;
            }

            return $match[2];
        }

        return null;
    }

    /**
     * Get the declared exceptions
     *
     * @param ReflectionMethod $method
     * @param array            $uses
     *
     * @return array
     */
    public static function getExceptions(ReflectionMethod $method, array $uses): array
    {
        preg_match_all(
            '~@throws\s+(\S+)[ \t]*([^\n]*)?\n~',
            self::getDocBlock($method, ''),
            $matches,
            PREG_SET_ORDER
        );
        
        $exceptions = [];
        foreach ($matches as $match) {
            $exceptions[] = [
                'class'       => self::namespace($match[1], $method->getDeclaringClass(), $uses),
                'description' => $match[2] ?? ''
            ];
        }

        return $exceptions;
    }

    /**
     * Get the class or method description from the docblock
     *
     * @param ReflectionClass|ReflectionMethod $method
     *
     * @return string|null
     */
    public static function getDescriptionFromDocblock($method): ?string
    {
        $docblock    = self::getDocBlock($method, '');
        $description = preg_replace('~^/\*\*\s*\n(.*?)(?:@.*)$~sm', '$1', $docblock);
        $description = preg_replace('~(?:^|\n)\s+\*(\s|\n)~', "$1\n", $description);
        $description = preg_replace('~\n\s+\*\s~', "\n\n", $description);
        $description = preg_replace('~<pre>(.*?)</pre>~', "```php\n$1\n```\n", $description);
        #$description = preg_replace('~(Example.*?:)(.*+)$~sm', "$1\n```php$2\n```\n", $description);

        return trim($description, " \t\n\r\0\x0B*");
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
            '~Method\s+to\s+(\w)~',
            static function ($match) {
                return strtoupper($match[1]);
            },
            $docblock
        );

        return $docblock;
    }

    /**
     * @param string          $type
     * @param ReflectionClass $declaringClass
     * @param array           $uses
     *
     * @return string
     */
    private static function namespace(string $type, ReflectionClass $declaringClass, array $uses): string
    {
        static $clean = [
            'boolean' => 'bool',
            'integer' => 'int',
        ];

        if (strpos($type, '|') !== false) {
            // $type is multi-type
            return implode(
                '|',
                array_map(
                    function ($item) use ($declaringClass, $uses) {
                        return self::namespace($item, $declaringClass, $uses);
                    },
                    explode('|', $type)
                )
            );
        }

        if (strpos($type, '\\') !== false) {
            // $type is already namespaced
            return ltrim($type, '\\');
        }

        if (isset($uses[$type])) {
            // $type was declared in a use statement
            return $uses[$type];
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
        return str_replace(array_keys($clean), array_values($clean), $type);
    }
}
