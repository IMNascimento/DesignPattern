<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d0b0d4d49423671878c63e8ccae4776
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Igor\\DesignPattern\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Igor\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d0b0d4d49423671878c63e8ccae4776::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d0b0d4d49423671878c63e8ccae4776::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d0b0d4d49423671878c63e8ccae4776::$classMap;

        }, null, ClassLoader::class);
    }
}