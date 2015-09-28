<?php

chdir(dirname(__DIR__));

if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

require 'vendor/autoload.php';

$container = include 'config/services.php';
$app = $container->get('Zend\Expressive\Application');
$app->run();
