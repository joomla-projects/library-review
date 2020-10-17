<?php

declare(strict_types=1);

use App\LibraryReview\ComposerLockFile;
use App\LibraryReview\TwigExtensions;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/vendor/autoload.php';

echo "Scanning packages ...\n";
$composerFile = new ComposerLockFile(__DIR__ . '/composer.lock');
$packages     = $composerFile->getPackageInfo('joomla/');
$target       = 'Laravel';
$samples      = parseSampleFiles(getSampleFiles(__DIR__ . '/samples/Joomla'));

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
    echo "Processing package {$package['name']} ...\n";
    $path = getStorageLocation($package, $target);

    $template = $twig->load('package.twig');
    file_put_contents(
        $path . '.md',
        trim(preg_replace("~(\s*\n){3,}~", "\n\n", $template->render(
            [
                'package'     => $package,
                'replacement' => $target,
                'samples'     => $samples,
            ]
        ))) . "\n"
    );
}
echo "Done.\n";

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
        createDir($dir);
    }

    return $path;
}

/**
 * @param string $dir
 */
function createDir(string $dir): void
{
    if (!mkdir($dir, 0777, true) && !is_dir($dir)) {
        throw new \RuntimeException(sprintf('Directory "%s" could not be created', $dir));
    }
}

/**
 * @param string $path
 *
 * @return array
 */
function getSampleFiles(string $path): array
{
    $files = [];
    /** @var \SplFileInfo $fileInfo */
    foreach (
        new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($path)
        ) as $fileInfo
    ) {
        $pathname = $fileInfo->getPathname();
        if (preg_match('~\.php$~', $pathname)) {
            $files[] = $pathname;
        }
    }

    return $files;
}

/**
 * @param array $files
 *
 * @return array
 */
function parseSampleFiles(array $files): array
{
    $samples = [];
    foreach ($files as $file) {
        $code = file_get_contents($file);

        $docblock = preg_replace('~^.*?(/\*\*.*?\*/).*$~sm', '$1', $code);
        $autoload = preg_replace('~^.*?(require.*?autoload.php\';).*$~sm', '$1', $code);
        $print_r  = preg_replace('~^.*?(print_r\(.*?\);).*$~sm', '$1', $code);
        $code     = trim(str_replace(['<?php', $docblock, $autoload, $print_r], '', $code));

        $title  = preg_replace('~^.*?/[*\s]+(.*?)\s*\n.*$~sm', '$1', $docblock);
        $method = preg_replace('~^.*?@covers\s+(.*?)\s*\n.*$~sm', '$1', $docblock);

        $output = preg_replace('~^.*?print_r\(\s*(.*?)[,)].*$~sm', '$1', $print_r);

        $samples[$method][] = [
            'title'  => $title,
            'code'   => $code,
            'output' => $output,
        ];
    }

    return $samples;
}
