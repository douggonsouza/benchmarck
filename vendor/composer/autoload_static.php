<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd72b845a614c12482431023a18d4e6fe
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'douggonsouza\\propertys\\' => 23,
            'douggonsouza\\language\\' => 22,
            'douggonsouza\\benchmarck\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'douggonsouza\\propertys\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/propertys/src',
        ),
        'douggonsouza\\language\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/language/src',
        ),
        'douggonsouza\\benchmarck\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'douggonsouza\\benchmarck\\assets\\assets' => __DIR__ . '/../..' . '/src/assets/assets.php',
        'douggonsouza\\benchmarck\\behaviorInterface' => __DIR__ . '/../..' . '/src/behaviorInterface.php',
        'douggonsouza\\benchmarck\\benchmarck' => __DIR__ . '/../..' . '/src/benchmarck.php',
        'douggonsouza\\benchmarck\\benchmarckInterface' => __DIR__ . '/../..' . '/src/benchmarckInterface.php',
        'douggonsouza\\benchmarck\\blocks\\blocks' => __DIR__ . '/../..' . '/src/blocks/blocks.php',
        'douggonsouza\\benchmarck\\identify' => __DIR__ . '/../..' . '/src/identify.php',
        'douggonsouza\\benchmarck\\layouts\\layouts' => __DIR__ . '/../..' . '/src/layouts/layouts.php',
        'douggonsouza\\language\\language' => __DIR__ . '/..' . '/douggonsouza/language/src/language.php',
        'douggonsouza\\language\\languageInterface' => __DIR__ . '/..' . '/douggonsouza/language/src/languageInterface.php',
        'douggonsouza\\propertys\\propertys' => __DIR__ . '/..' . '/douggonsouza/propertys/src/propertys.php',
        'douggonsouza\\propertys\\propertysInterface' => __DIR__ . '/..' . '/douggonsouza/propertys/src/propertysInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd72b845a614c12482431023a18d4e6fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd72b845a614c12482431023a18d4e6fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd72b845a614c12482431023a18d4e6fe::$classMap;

        }, null, ClassLoader::class);
    }
}
