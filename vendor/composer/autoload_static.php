<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1121502f3dc4f2d44eee99f9111b768b
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Neoan3\\Apps\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Neoan3\\Apps\\' => 
        array (
            0 => __DIR__ . '/..' . '/neoan3-apps/db',
            1 => __DIR__ . '/..' . '/neoan3-apps/ops',
            2 => __DIR__ . '/..' . '/neoan3-apps/transformer',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\CustomDirectoryInstaller' => 
            array (
                0 => __DIR__ . '/..' . '/mnsami/composer-custom-directory-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1121502f3dc4f2d44eee99f9111b768b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1121502f3dc4f2d44eee99f9111b768b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1121502f3dc4f2d44eee99f9111b768b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
