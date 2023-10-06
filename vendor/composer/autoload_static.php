<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit628612cf49f13df0444b5d7b65f5277b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit628612cf49f13df0444b5d7b65f5277b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit628612cf49f13df0444b5d7b65f5277b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit628612cf49f13df0444b5d7b65f5277b::$classMap;

        }, null, ClassLoader::class);
    }
}
