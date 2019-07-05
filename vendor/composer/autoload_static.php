<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7777b8e6998b542680a1929ee9c5cd1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7777b8e6998b542680a1929ee9c5cd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7777b8e6998b542680a1929ee9c5cd1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}