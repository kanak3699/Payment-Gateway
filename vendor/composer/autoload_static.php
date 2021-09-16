<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc0af6d579b74f50787bcc39d6f60928
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc0af6d579b74f50787bcc39d6f60928::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc0af6d579b74f50787bcc39d6f60928::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc0af6d579b74f50787bcc39d6f60928::$classMap;

        }, null, ClassLoader::class);
    }
}
