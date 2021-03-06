<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf0c7f65627f0a9c0b7c98f25ac4f3e5
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf0c7f65627f0a9c0b7c98f25ac4f3e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf0c7f65627f0a9c0b7c98f25ac4f3e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf0c7f65627f0a9c0b7c98f25ac4f3e5::$classMap;

        }, null, ClassLoader::class);
    }
}
