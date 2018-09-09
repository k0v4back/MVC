<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36071e7bcd160f7d12920391741d93f2
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'views\\' => 6,
        ),
        't' => 
        array (
            'template\\' => 9,
        ),
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'controllers\\' => 12,
            'config\\' => 7,
            'components\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
        'template\\' => 
        array (
            0 => __DIR__ . '/../..' . '/template',
        ),
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36071e7bcd160f7d12920391741d93f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36071e7bcd160f7d12920391741d93f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}