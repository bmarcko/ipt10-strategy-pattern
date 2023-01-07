<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit47f58ed6df8411f008fb98d700a1a80e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit47f58ed6df8411f008fb98d700a1a80e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit47f58ed6df8411f008fb98d700a1a80e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit47f58ed6df8411f008fb98d700a1a80e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}