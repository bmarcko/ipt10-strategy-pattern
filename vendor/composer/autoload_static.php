<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47f58ed6df8411f008fb98d700a1a80e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marcko\\Ipt10StrategyPattern\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marcko\\Ipt10StrategyPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit47f58ed6df8411f008fb98d700a1a80e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47f58ed6df8411f008fb98d700a1a80e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47f58ed6df8411f008fb98d700a1a80e::$classMap;

        }, null, ClassLoader::class);
    }
}
