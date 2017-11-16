<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

function sql_error_handler($params) {
    global $app, $log;
    $log->err("SQL Error: " . $params['error']);
    $log->err(" in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

function nonsql_error_handler($params) {
    global $app, $log;
    $log->err("SQL Error: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

// Slim creation and setup // 
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));
// Documentation
//$app = new \Slim\Slim(['view' => new \Slim\Views\Twig()]);

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


//Documentation
//$view = $app->view();
//$view->setTemplatesDirectory('/templates');
//$view->parserExtensions = [new \Slim\Views\TwigExtension(),];
//$app->get('/', function() {
//    echo 'Hello';
//});

$app->get('/base', function() use ($app) {
    $app->render('base.html.twig');
});

$app->get('/home', function() use ($app) {
    echo 'Welcome to the home page';
});

$app->get('/page2', function() use ($app) {
    echo 'Welcome to the page 2';
});

$app->get('/page3', function() use ($app) {
    return '/base.html.twig';
});

//require_once 'account.php';

//require_once 'admin.php';

//require_once 'cart.php';

//$view['HomeController'] = function ($view) {
//    return new \App\Controllers\HomeController;
//};
//        
//$spp->('/', 'HomeController:index');

$app->run();
