<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita686b1a508c79f624e86491b85ab9e59
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita686b1a508c79f624e86491b85ab9e59::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
