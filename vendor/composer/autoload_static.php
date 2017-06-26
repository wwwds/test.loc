<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3c54e2cd7b5375a74e0534afd877b21
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'P' => 
        array (
            'Parsclick\\' => 10,
        ),
        'M' => 
        array (
            'MyClasses\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Parsclick\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components/Parsclick',
        ),
        'MyClasses\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3c54e2cd7b5375a74e0534afd877b21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3c54e2cd7b5375a74e0534afd877b21::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita3c54e2cd7b5375a74e0534afd877b21::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
