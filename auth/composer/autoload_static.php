<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04de28684f81f93087fd6c20708d9f01
{
    public static $prefixesPsr0 = array (
        's' => 
        array (
            'sendotp\\' => 
            array (
                0 => __DIR__ . '/..' . '/sendotp/sendotp/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit04de28684f81f93087fd6c20708d9f01::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
