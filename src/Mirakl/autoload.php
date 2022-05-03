<?php
declare(strict_types=1);

namespace Mirakl;

if (!function_exists('\Mirakl\isPHP7')) {
    /**
     * Returns true if current PHP version is 7.x, false otherwise.
     *
     * @return bool
     */
    function isPHP7(): bool
    {
        return \PHP_VERSION_ID < 80000 && \PHP_VERSION_ID >= 70000;
    }
}

if (isPHP7()) {
    /**
     * This code defines a custom directory for PHP 7 specific classes.
     * It is needed for backwards compatibility of the SDK and to not
     * make PHP 8 mandatory.
     */
    $autoloadPaths = [
        __DIR__ . '/../../../../../vendor/autoload.php',
        __DIR__ . '/../../vendor/autoload.php',
    ];
    foreach ($autoloadPaths as $path) {
        if (\file_exists($path)) {
            /** @var \Composer\Autoload\ClassLoader $loader */
            $loader = require $path;
            $loader->addPsr4('Mirakl\\', __DIR__ . '/../7.x/Mirakl/', true);
            break;
        }
    }
}
