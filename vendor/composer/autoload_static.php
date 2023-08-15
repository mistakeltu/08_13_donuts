<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb69781dffc87d39ff33640120b99318d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'D' => 
        array (
            'Donuts\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'Donuts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb69781dffc87d39ff33640120b99318d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb69781dffc87d39ff33640120b99318d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb69781dffc87d39ff33640120b99318d::$classMap;

        }, null, ClassLoader::class);
    }
}
