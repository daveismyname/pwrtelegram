<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde8a232de66fffef4be4dbea58c51255
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'M' => 
        array (
            'Mhor\\MediaInfo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Mhor\\MediaInfo\\' => 
        array (
            0 => __DIR__ . '/..' . '/mhor/php-mediainfo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'Zyberspace\\Telegram\\Cli\\' => 
            array (
                0 => __DIR__ . '/..' . '/pwrtelegram/telegram-cli-client/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde8a232de66fffef4be4dbea58c51255::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde8a232de66fffef4be4dbea58c51255::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitde8a232de66fffef4be4dbea58c51255::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
