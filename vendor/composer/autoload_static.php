<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf538bbe9d1eac0603b2a08facba9a44f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf538bbe9d1eac0603b2a08facba9a44f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf538bbe9d1eac0603b2a08facba9a44f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}