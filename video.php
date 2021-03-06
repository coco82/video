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

// Slim creation and setup
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


if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
});

$app->get('/register', function() use ($app) {
    $app->render('register.html.twig');
});

$app->post('/register', function() use ($app) {
    $name = $app->request()->post('name');
    $email = $app->request()->post('email');
    $pass1 = $app->request()->post('pass1');
    $pass2 = $app->request()->post('pass2');
//
    $values = array('name' => $name, 'email' => $email);
    $errorList = array();
//
    if (strlen($name) < 2 || strlen($name) > 50) {
        $values['name'] = '';
        array_push($errorList, "Name must be between 2 and 50 characters long");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        array_push($errorList, "Email must look like a valid email");
    } else {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            array_push($errorList, "Email already in use");
        }
    }
    if ($pass1 != $pass2) {
        array_push($errorList, "Passwords don't match");
    } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
        if (strlen($pass1) < 2 || strlen($pass1) > 50) {
            array_push($errorList, "Password must be between 2 and 50 characters long");
        }
    }
//
    if ($errorList) { // 3. failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { // 2. successful submission
        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $pass1));
        $app->render('register_success.html.twig');
    }
});

// Public | Home
$app->get('/video', function() use ($app) {
    $app->render('video.html.twig');
});

// Public | Register
$app->get('/register', function() use ($app) {
    $app->render('register.html.twig');
});

// Public | Player
$app->get('/player', function() use ($app) {
    $app->render('player.html.twig');
});

// User | Playlist
$app->get('/playlist', function() use ($app) {
    $app->render('playlist.html.twig');
});

// User | My Channel
$app->get('/channel', function() use ($app) {
    $app->render('mychannel.html.twig');
});

// User | Upload
$app->get('/upload', function() use ($app) {
    $app->render('upload.html.twig');
});

$app->post('/upload3', function() use ($app) {
// receiving a submission
    $name = $app->request()->post('name');
    //$age = $app->request()->post('age');
    $values = array('name' => $name);
    $errorList = array();
    if (strlen($name) < 2 || strlen($name) > 50) {
        array_push($errorList, "Name must be between 2 and 50 characters long");
        $values['name'] = '';
    }
//    if (empty($age) || $age < 0 || $age > 150) {
//        array_push($errorList, "Age must be between 1 and 150");
//        $values['age'] = '';
//    }
    if ($errorList) {
// 3. failed submission
        $app->render('not_found.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else {
// 2. successful submission
        DB::insert('videos', array('name' => $name, 'age' => $age));
        $app->render('upload_success.html.twig', array('name' => $name));
    }
});

// User | Upload
$app->get('/upload', function() use ($app) {
    $app->render('upload.html.twig');
});

// User | Upload
$app->get('/upload', function() use ($app) {
    $app->render('upload.html.twig');
});


require_once 'upload.php';

require_once 'account.php';

$app->run();

