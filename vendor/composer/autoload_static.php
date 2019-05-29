<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42876d1ba09f1588b2c1e59b66832d5e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Meteopark\\Tests\\' => 16,
            'Meteopark\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Meteopark\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Meteopark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42876d1ba09f1588b2c1e59b66832d5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42876d1ba09f1588b2c1e59b66832d5e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
