<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdef1740e6d475f25e27e58d3f0b87a20
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdef1740e6d475f25e27e58d3f0b87a20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdef1740e6d475f25e27e58d3f0b87a20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdef1740e6d475f25e27e58d3f0b87a20::$classMap;

        }, null, ClassLoader::class);
    }
}