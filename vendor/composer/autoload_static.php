<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf44a04c14debe576af4415f93e94d3b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf44a04c14debe576af4415f93e94d3b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf44a04c14debe576af4415f93e94d3b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf44a04c14debe576af4415f93e94d3b::$classMap;

        }, null, ClassLoader::class);
    }
}