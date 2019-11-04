<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite106caa8d500916f054f535ccdc99c79
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Ylva\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ylva\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite106caa8d500916f054f535ccdc99c79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite106caa8d500916f054f535ccdc99c79::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
