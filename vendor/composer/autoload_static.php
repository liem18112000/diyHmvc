<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit138361e0588f42caaf8521934b34d7ce
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/mvcframework',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/src',
        ),
    );

    public static $classMap = array (
        'Application\\Controller\\AuthController' => __DIR__ . '/../..' . '/module/Application/src/controller/AuthController.php',
        'Application\\Controller\\IndexController' => __DIR__ . '/../..' . '/module/Application/src/controller/IndexController.php',
        'Application\\Model\\Auth\\SimpleUser' => __DIR__ . '/../..' . '/module/Application/src/model/auth/SimpleUser.php',
        'Application\\Model\\Auth\\User' => __DIR__ . '/../..' . '/module/Application/src/model/auth/User.php',
        'Framework\\Core\\App\\AbstractApp' => __DIR__ . '/..' . '/mvcframework/core/app/AbstractApp.php',
        'Framework\\Core\\App\\App' => __DIR__ . '/..' . '/mvcframework/core/app/App.php',
        'Framework\\Core\\App\\AppInterface' => __DIR__ . '/..' . '/mvcframework/core/app/AppInterface.php',
        'Framework\\Core\\Autoload\\Autoloader' => __DIR__ . '/..' . '/mvcframework/core/autoload/Autoloader.php',
        'Framework\\Core\\Controller\\AbstractController' => __DIR__ . '/..' . '/mvcframework/core/controller/AbstractController.php',
        'Framework\\Core\\Database\\Database' => __DIR__ . '/..' . '/mvcframework/core/database/Database.php',
        'Framework\\Core\\Database\\MySQLI_DB' => __DIR__ . '/..' . '/mvcframework/core/database/MySQLI_DB.php',
        'Framework\\Core\\Middleware' => __DIR__ . '/..' . '/mvcframework/core/middleware/Middleware.php',
        'Framework\\Core\\Middleware\\csrfPreventer' => __DIR__ . '/..' . '/mvcframework/core/middleware/csrf/csrfPreventer.php',
        'Framework\\Core\\Middleware\\htmlXSS' => __DIR__ . '/..' . '/mvcframework/core/middleware/xss/htmlXSS.php',
        'Framework\\Core\\Module\\AbstractModule' => __DIR__ . '/..' . '/mvcframework/core/module/AbstractModule.php',
        'Framework\\Core\\Module\\Module' => __DIR__ . '/..' . '/mvcframework/core/module/Module.php',
        'Framework\\Core\\Module\\ModuleInterface' => __DIR__ . '/..' . '/mvcframework/core/module/ModuleInterface.php',
        'Framework\\Core\\Registry\\Registry' => __DIR__ . '/..' . '/mvcframework/core/registry/Registry.php',
        'Framework\\Core\\Route\\Route' => __DIR__ . '/..' . '/mvcframework/core/route/Route.php',
        'Framework\\Core\\Route\\RouteContainer' => __DIR__ . '/..' . '/mvcframework/core/route/RouteContainer.php',
        'Framework\\Core\\Route\\RouteContainerInterface' => __DIR__ . '/..' . '/mvcframework/core/route/RouteContainerInterface.php',
        'Framework\\Core\\View\\View' => __DIR__ . '/..' . '/mvcframework/core/view/View.php',
        'Framework\\Exception\\ExceptionHandler' => __DIR__ . '/..' . '/mvcframework/exception/ExceptionHandler.php',
        'Framework\\File\\Image' => __DIR__ . '/..' . '/mvcframework/file/image/Image.php',
        'Framework\\File\\ImageUpload' => __DIR__ . '/..' . '/mvcframework/file/image/ImageUpload.php',
        'Framework\\Form\\Form' => __DIR__ . '/..' . '/mvcframework/form/Form.php',
        'Framework\\Translator\\SimpleTranslator' => __DIR__ . '/..' . '/mvcframework/translator/Translator.php',
        'Framework\\Validator\\Validator' => __DIR__ . '/..' . '/mvcframework/validator/Validator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit138361e0588f42caaf8521934b34d7ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit138361e0588f42caaf8521934b34d7ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit138361e0588f42caaf8521934b34d7ce::$classMap;

        }, null, ClassLoader::class);
    }
}
