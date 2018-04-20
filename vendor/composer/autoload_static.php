<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab795c0bc49fb306729b09d9b2676a60
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SpecParser\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'O' => 
        array (
            'Ospek\\' => 6,
        ),
        'N' => 
        array (
            'NetHelper\\' => 10,
        ),
        'M' => 
        array (
            'MalApi\\' => 7,
        ),
        'J' => 
        array (
            'Jikan\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SpecParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nxnx/spec-parser/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Ospek\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'NetHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/nxnx/net-helper/src',
        ),
        'MalApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/animelist/mal-api/src',
        ),
        'Jikan\\' => 
        array (
            0 => __DIR__ . '/..' . '/jikan-me/jikan/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static $classMap = array (
        'Callback' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackBody' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackParam' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackParameterToReference' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackReturnReference' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'CallbackReturnValue' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'DOMDocumentWrapper' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/DOMDocumentWrapper.php',
        'DOMEvent' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/DOMEvent.php',
        'ICallbackNamed' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/Callback.php',
        'phpQuery' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery.php',
        'phpQueryEvents' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/phpQueryEvents.php',
        'phpQueryObject' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/phpQueryObject.php',
        'phpQueryObjectPlugin_Scripts' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/Scripts.php',
        'phpQueryObjectPlugin_WebBrowser' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/WebBrowser.php',
        'phpQueryObjectPlugin_example' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/example.php',
        'phpQueryPlugin_Scripts' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/Scripts.php',
        'phpQueryPlugin_WebBrowser' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/WebBrowser.php',
        'phpQueryPlugin_example' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery/plugins/example.php',
        'phpQueryPlugins' => __DIR__ . '/..' . '/electrolinux/phpquery/phpQuery/phpQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab795c0bc49fb306729b09d9b2676a60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab795c0bc49fb306729b09d9b2676a60::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitab795c0bc49fb306729b09d9b2676a60::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitab795c0bc49fb306729b09d9b2676a60::$classMap;

        }, null, ClassLoader::class);
    }
}
