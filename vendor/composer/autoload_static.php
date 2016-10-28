<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1247447c605bf5f9cc902c10cbe8ed2a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1247447c605bf5f9cc902c10cbe8ed2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1247447c605bf5f9cc902c10cbe8ed2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
