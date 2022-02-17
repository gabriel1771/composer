<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59ceedc79b49e1029e26a0ca2c9573c8
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gabriel1771\\Composer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gabriel1771\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59ceedc79b49e1029e26a0ca2c9573c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59ceedc79b49e1029e26a0ca2c9573c8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit59ceedc79b49e1029e26a0ca2c9573c8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit59ceedc79b49e1029e26a0ca2c9573c8::$classMap;

        }, null, ClassLoader::class);
    }
}