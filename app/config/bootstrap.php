<?php

// Define application constants
define('APPLICATION_START', microtime(true));
define('APPLICATION_ENV', 'local');
define('APPLICATION_VERSION', '1.0.0');

// Set custom PHP options
date_default_timezone_set('UTC');

try {

    // Load vendors
    require_once __DIR__ . '/../../vendor/autoload.php';

    // Get the app instance, init, and process request
    $app = Rf\Core\Application\ApplicationMvc::getInstance();
    $app->setConfigurationFile(__DIR__ . '/config.php');
    $app->init();
    $app->handleRequest();

} catch (\Exception $e) {

    echo $e->getMessage();die;

} catch (\Error $e) {

    echo $e->getMessage();die;

}