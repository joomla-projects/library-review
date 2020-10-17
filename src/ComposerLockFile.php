<?php

declare(strict_types=1);

namespace App\LibraryReview;

use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\Node\Stmt\Use_;
use PhpParser\ParserFactory;

class ComposerLockFile
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $vendorDir;

    public function __construct(string $lockFilePath)
    {
        $this->vendorDir = dirname($lockFilePath) . '/vendor';
        $this->data      = json_decode(file_get_contents($lockFilePath), true);
    }

    /**
     * Get the information from a composer.lock file for packages of a specific vendor
     *
     * The information is enriched with a list of source file names (index: files)
     * and ReflectionClass objects (index: classes) for each class, trait and interface.
     *
     * @param string $packageName The (partial) name of the package(s)
     *
     * @return array
     */
    public function getPackageInfo(string $packageName): array
    {
        $lockData = $this->data;

        $packages = array_reduce(
            $lockData['packages'],
            static function ($carry, $package) use ($packageName) {
                if (strpos($package['name'], $packageName) === 0) {
                    $carry[$package['name']] = $package;
                }

                return $carry;
            },
            []
        );

        $packages = $this->addListOfSourceFiles($packages);
        $packages = $this->addReflectionClasses($packages, $packageName);

        return $packages;
    }

    /**
     * @param array $packages
     *
     * @return array
     */
    private function addListOfSourceFiles(array $packages): array
    {
        foreach ($packages as $name => $package) {
            $packages[$name]['files'] = [];
            $basepath                 = $this->vendorDir . '/' . $name;

            if (isset($package['target-dir'])) {
                $basepath .= '/' . $package['target-dir'];
            }

            foreach ($package['autoload'] as $autoLoadMethod => $sourcePaths) {
                switch ($autoLoadMethod) {
                    case 'classmap':
                    case 'files':
                        $packages[$name]['files'] = array_reduce(
                            $sourcePaths,
                            static function ($carry, $file) use ($basepath) {
                                $carry[] = $basepath . '/' . $file;

                                return $carry;
                            },
                            $packages[$name]['files']
                        );
                        break;

                    case 'psr-0':
                    case 'psr-4':
                        $packages[$name]['files'] = array_reduce(
                            $sourcePaths,
                            static function ($carry, $file) use ($basepath) {
                                /** @var \SplFileInfo $fileInfo */
                                foreach (
                                    new \RecursiveIteratorIterator(
                                        new \RecursiveDirectoryIterator($basepath . '/' . $file)
                                    ) as $fileInfo
                                ) {
                                    $pathname = $fileInfo->getPathname();
                                    if (preg_match('~\.php$~', $pathname)) {
                                        $carry[] = $pathname;
                                    }
                                }

                                return $carry;
                            },
                            $packages[$name]['files']
                        );
                        break;

                    default:
                        throw new \LogicException("Unhandled autoload method $autoLoadMethod");
                }
            }
        }

        return $packages;
    }

    /**
     * @param array  $packages
     * @param string $packageName
     *
     * @return array
     */
    private function addReflectionClasses(array $packages, string $packageName): array
    {
        foreach ($packages as $name => $package) {
            $classes = [];
            foreach ($package['files'] as $file) {
                $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
                try {
                    $content = file_get_contents($file);

                    if ($content === false) {
                        echo "Unable to read file $file\n";
                        continue;
                    }

                    $ast = $parser->parse($content);
                } catch (\Error $error) {
                    echo "Parse error: {$error->getMessage()} in $file\n";

                    continue;
                }

                $branch = array_shift($ast);

                if (!$branch instanceof Namespace_) {
                    continue;
                }

                $classes = $this->extractClasses($branch, $classes, $packageName);
            }

            if (empty($classes)) {
                unset($packages[$name]);
            } else {
                $packages[$name]['classes'] = $classes;
            }
        }

        return $packages;
    }

    /**
     * @param Namespace_ $branch
     * @param array      $classes
     * @param string     $packageName
     *
     * @return array
     */
    private function extractClasses(Namespace_ $branch, array $classes, string $packageName): array
    {
        $namespace = (string)$branch->name;

        if (stripos($namespace, str_replace('/', '\\', $packageName)) !== 0) {
            return [];
        }

        $uses    = [];
        $classes = array_reduce(
            $branch->stmts,
            /**
             * @param        $carry
             * @param Stmt   $item
             *
             * @return mixed
             */
            static function ($carry, Stmt $item) use ($namespace, &$uses) {
                if ($item instanceof Use_) {
                    foreach ($item->uses as $use) {
                        $uses[$use->getAlias()->name] = $use->name->toString();
                    }

                    return $carry;
                }

                if ($item instanceof If_) {
                    return $carry;
                }

                if (!$item instanceof Stmt\ClassLike) {
                    return $carry;
                }

                if ((string)$item->name === 'String') {
                    return $carry;
                }

                try {
                    $carry[] = [
                        'class' => new \ReflectionClass(ltrim($namespace . '\\' . $item->name, '\\')),
                        'uses'  => $uses,
                    ];
                } catch (\Throwable $e) {
                    // ignore
                }

                return $carry;
            },
            $classes ?? []
        );

        return $classes;
    }
}
