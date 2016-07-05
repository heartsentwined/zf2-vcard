<?php
use Zend\Mvc\Application;
chdir(__DIR__);
require 'vendor/autoload.php';
return Application::init(array(
    'modules'   => array(
        'DoctrineModule',
        'DoctrineORMModule',
        'Yalesov\Vcard',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            __DIR__ . '/test/config/{,*.}test.php'
        ),
        'module_paths' => array(
            'Yalesov\Vcard' => __DIR__,
            'vendor',
        ),
    ),
));
