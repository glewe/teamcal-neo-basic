<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7c9476595245fe7a18c1d19c8b5a97a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MatthiasMullie\\Minify\\CSS' => __DIR__ . '/..' . '/matthiasmullie/minify/src/CSS.php',
        'MatthiasMullie\\Minify\\Exception' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exception.php',
        'MatthiasMullie\\Minify\\Exceptions\\BasicException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/BasicException.php',
        'MatthiasMullie\\Minify\\Exceptions\\FileImportException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/FileImportException.php',
        'MatthiasMullie\\Minify\\Exceptions\\IOException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/IOException.php',
        'MatthiasMullie\\Minify\\JS' => __DIR__ . '/..' . '/matthiasmullie/minify/src/JS.php',
        'MatthiasMullie\\Minify\\Minify' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Minify.php',
        'MatthiasMullie\\PathConverter\\Converter' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/Converter.php',
        'MatthiasMullie\\PathConverter\\ConverterInterface' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/ConverterInterface.php',
        'MatthiasMullie\\PathConverter\\NoConverter' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/NoConverter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7c9476595245fe7a18c1d19c8b5a97a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7c9476595245fe7a18c1d19c8b5a97a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7c9476595245fe7a18c1d19c8b5a97a::$classMap;

        }, null, ClassLoader::class);
    }
}