<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bd09b2ac57257fdaf2cacba991b5835
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ERROR\\Inc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ERROR\\Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bd09b2ac57257fdaf2cacba991b5835::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bd09b2ac57257fdaf2cacba991b5835::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bd09b2ac57257fdaf2cacba991b5835::$classMap;

        }, null, ClassLoader::class);
    }
}