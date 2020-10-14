<?php

declare(strict_types=1);

use App\LibraryReview\ComposerLockFile;
use App\LibraryReview\TwigExtensions;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/vendor/autoload.php';

$composerFile = new ComposerLockFile(__DIR__ . '/composer.lock');
$packages     = $composerFile->getPackageInfo('joomla/');
$target       = 'Laravel';

$loader = new FilesystemLoader(__DIR__ . '/template');
$twig   = new Environment(
    $loader,
    [
        'cache' => __DIR__ . '/cache',
        'debug' => true,
    ]
);
TwigExtensions::extend($twig);

foreach ($packages as $package) {
    $path = getStorageLocation($package, $target);

    #print_r($package);
    $template = $twig->load('class.twig');
    file_put_contents(
        $path . '.md',
        $template->render(
            [
                'package'     => $package,
                'replacement' => $target,
            ]
        )
    );
}

/**
 * @param array  $package
 * @param string $target
 *
 * @return string
 */
function getStorageLocation(array $package, string $target): string
{
    $parts = array_map('ucfirst', explode('/', $package['name']));
    array_shift($parts);
    $path = __DIR__ . '/docs/' . $target . '/' . implode('/', $parts);
    $dir  = dirname($path);
    if (!is_dir($dir)) {
        if (!mkdir($dir, 0777, true) && !is_dir($dir)) {
            throw new \RuntimeException(sprintf('Directory "%s" could not be created', $dir));
        }
    }

    return $path;
}