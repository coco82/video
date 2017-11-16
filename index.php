<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$dbName = 'cp4809_video';
DB::$user = 'cp4809_video';
DB::$encoding = 'utf8';
DB::$password = 'Despastica1982';

DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

// Slim creation and setup // app.php
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

// Array key to append
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));

$app->get('/home', function() use ($app) {
    echo 'Welcome to the home page';
});

$app->get('/register', function() use ($app) {
    $app->render('register.html.twig');
});


//require_once 'account.php';
//
//require_once 'admin.php';
//
//require_once 'cart.php';

$app->run();
