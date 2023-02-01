<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4e9c0a42e67033d284b3672c759e190
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IT\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4e9c0a42e67033d284b3672c759e190::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4e9c0a42e67033d284b3672c759e190::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}