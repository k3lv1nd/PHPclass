<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6e5c45737f689dd67464ca930a5e455
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kelvin\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kelvin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6e5c45737f689dd67464ca930a5e455::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6e5c45737f689dd67464ca930a5e455::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
