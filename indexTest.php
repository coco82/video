<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

// Database
DB::$dbName = 'cp4809_video';
DB::$user = 'cp4809_video';
DB::$encoding = 'utf8';
DB::$password = 'Despastica1982';
DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

// Handling Database errors
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

// Slim creation and setup (Container)
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));
//$container = new \Slim\Container;

// Array key to append (Logs)
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');
//$container['view'] = function ($c) {
//  $view = new\Slim\Views\Twig('/templates', 
//          ['cache' => '../cache']);    
// Slim creation and setup (Twig Extension)
//$app = new \Slim\Slim(array(
//    'view' => new \Slim\Views\Twig()
//        ));
//  $view->addExtension(new \Slim\Views\TwigExtension(
//          $c['router'],
//          $c['request']->getUri()
//          ));
//  
//          return $view;
//$app = new\Slim\App($container);

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));

// Logic for our views
$app->get('/profile{username}', function ($request, $response, $args) {
    // Pass something
    return $this->view->render($response, 'home.twig', 
            ['name' => $args['username'],
                ]); 
});

// Root
$app->get('/profile/{username}', function ($request, $response, $args) {
    echo $args['username'];
    })->SetName('user.profile');

require_once 'templates.php';    
    
$app->run();