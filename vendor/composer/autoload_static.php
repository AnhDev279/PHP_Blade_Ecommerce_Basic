<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2632ad1b87733972554b55b0d2ea972
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php2\\Ecommerce\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php2\\Ecommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2632ad1b87733972554b55b0d2ea972::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2632ad1b87733972554b55b0d2ea972::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2632ad1b87733972554b55b0d2ea972::$classMap;

        }, null, ClassLoader::class);
    }
}
