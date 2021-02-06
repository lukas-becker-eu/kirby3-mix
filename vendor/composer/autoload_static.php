<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f7a94ab5c4280458531c0ca1e362bda
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LukasBecker\\Mix\\' => 16,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LukasBecker\\Mix\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f7a94ab5c4280458531c0ca1e362bda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f7a94ab5c4280458531c0ca1e362bda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f7a94ab5c4280458531c0ca1e362bda::$classMap;

        }, null, ClassLoader::class);
    }
}
