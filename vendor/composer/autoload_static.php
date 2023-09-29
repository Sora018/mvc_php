<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9de0aee28eb75e47115ffecc1f7251a2
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9de0aee28eb75e47115ffecc1f7251a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9de0aee28eb75e47115ffecc1f7251a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9de0aee28eb75e47115ffecc1f7251a2::$classMap;

        }, null, ClassLoader::class);
    }
}
