<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Application\\Controller\\AuthController' => $baseDir . '/module/Application/src/controller/AuthController.php',
    'Application\\Controller\\IndexController' => $baseDir . '/module/Application/src/controller/IndexController.php',
    'Application\\Model\\Auth\\SimpleUser' => $baseDir . '/module/Application/src/model/auth/SimpleUser.php',
    'Application\\Model\\Auth\\User' => $baseDir . '/module/Application/src/model/auth/User.php',
    'Customer\\Controller\\CustomerController' => $baseDir . '/module/Customer/src/controller/CustomerController.php',
    'Customer\\Controller\\VisualizeController' => $baseDir . '/module/Customer/src/controller/VisualizeController.php',
    'Customer\\Model\\Attendance' => $baseDir . '/module/Customer/src/model/Attendance.php',
    'Customer\\Model\\Customer' => $baseDir . '/module/Customer/src/model/Customer.php',
    'Framework\\Core\\App\\AbstractApp' => $vendorDir . '/mvcframework/core/app/AbstractApp.php',
    'Framework\\Core\\App\\App' => $vendorDir . '/mvcframework/core/app/App.php',
    'Framework\\Core\\App\\AppInterface' => $vendorDir . '/mvcframework/core/app/AppInterface.php',
    'Framework\\Core\\Autoload\\Autoloader' => $vendorDir . '/mvcframework/core/autoload/Autoloader.php',
    'Framework\\Core\\Controller\\AbstractController' => $vendorDir . '/mvcframework/core/controller/AbstractController.php',
    'Framework\\Core\\Database\\Database' => $vendorDir . '/mvcframework/core/database/Database.php',
    'Framework\\Core\\Database\\MySQLI_DB' => $vendorDir . '/mvcframework/core/database/MySQLI_DB.php',
    'Framework\\Core\\Middleware' => $vendorDir . '/mvcframework/core/middleware/Middleware.php',
    'Framework\\Core\\Middleware\\csrfPreventer' => $vendorDir . '/mvcframework/core/middleware/csrf/csrfPreventer.php',
    'Framework\\Core\\Middleware\\htmlXSS' => $vendorDir . '/mvcframework/core/middleware/xss/htmlXSS.php',
    'Framework\\Core\\Module\\AbstractModule' => $vendorDir . '/mvcframework/core/module/AbstractModule.php',
    'Framework\\Core\\Module\\Module' => $vendorDir . '/mvcframework/core/module/Module.php',
    'Framework\\Core\\Module\\ModuleInterface' => $vendorDir . '/mvcframework/core/module/ModuleInterface.php',
    'Framework\\Core\\Registry\\Registry' => $vendorDir . '/mvcframework/core/registry/Registry.php',
    'Framework\\Core\\View\\View' => $vendorDir . '/mvcframework/core/view/View.php',
    'Framework\\Exception\\ExceptionHandler' => $vendorDir . '/mvcframework/exception/ExceptionHandler.php',
    'Framework\\File\\Image' => $vendorDir . '/mvcframework/file/image/Image.php',
    'Framework\\File\\ImageUpload' => $vendorDir . '/mvcframework/file/image/ImageUpload.php',
    'Framework\\Form\\Form' => $vendorDir . '/mvcframework/form/Form.php',
    'Framework\\Translator\\SimpleTranslator' => $vendorDir . '/mvcframework/translator/Translator.php',
    'Framework\\Validator\\Validator' => $vendorDir . '/mvcframework/validator/Validator.php',
);