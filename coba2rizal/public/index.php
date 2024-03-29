<?php

declare(strict_types=1);

// Define application base directory
define('APP_DIR', realpath(__DIR__ . '/../'));

chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (is_string($path) && __FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/helper.php';

$app = new Itseasy\Application([
    'config_path' => [
        __DIR__ . '/../config/*.{local,config}.php',
    ],
    'module' => [
        \Laminas\Form\Module::class,
        \Laminas\Cache\Module::class,
        \Laminas\Cache\Storage\Adapter\Filesystem\Module::class
    ],
    'container_provider' => \Itseasy\ServiceManager\LaminasServiceManager::class,
]);
$app->build();
$app->run();
