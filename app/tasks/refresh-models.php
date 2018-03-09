<?php

// Get params from CLI
$cliParams = getopt('', [
    'env:',
]);

if(empty($cliParams['env'])) {
    echo PHP_EOL . 'Command usage: php refresh-models.php --env="[env_name]"' . PHP_EOL;
    die;
}

// Define constants
define('APPLICATION_START', microtime(true));
define('APPLICATION_ENV', 'local');
define('APPLICATION_TYPE', 'cron');

// Set custom PHP options
date_default_timezone_set('UTC');

try {

    // Load vendors
    require_once __DIR__ . '/../../vendor/autoload.php';

    // Get the app instance, init, and process request
    $app = Rf\Core\Application\ApplicationCron::getInstance();
    $app->setConfigurationFile(dirname(dirname(__FILE__)) . '/config/config.php');
    $app->init();

    $app->architect()->refresh(['default']);
    echo 'Models refreshed!' . PHP_EOL;

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
    die;

} catch (\Error $e) {

    echo $e->getMessage() . PHP_EOL;
    die;

}
