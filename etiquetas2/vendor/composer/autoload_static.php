<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d400a3c8cefcfcfdcd9bd2fa5a785bc
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d400a3c8cefcfcfdcd9bd2fa5a785bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d400a3c8cefcfcfdcd9bd2fa5a785bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d400a3c8cefcfcfdcd9bd2fa5a785bc::$classMap;

        }, null, ClassLoader::class);
    }
}
