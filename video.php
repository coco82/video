<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$dbName = 'cp4809_video';
DB::$user = 'cp4809_video';
DB::$encoding = 'utf8';
DB::$password = 'Despastica1982';

// video creation and setup
//$app = new \Slim\Slim(array(
//    'view' => new \Slim\Views\Twig()
//        ));
//
//$view = $app->view();
//$view->parserOptions = array(
//    'debug' => true,
//    'cache' => dirname(__FILE__) . '/cache'
//);
//$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');
//
//// create a log channel
//$log = new Logger('main');
//$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
//$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));
//
//
//if (!isset($_SESSION['user'])) {
//    $_SESSION['user'] = array();
//}
//
//$app->get('/', function() use ($app) {
//    $app->render('index.html.twig');
//});
//
//$app->get('/session', function() {
//    print_r($_SESSION);
//});
//
//$app->get('/admin/products/list', function() use ($app) {
//    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
//        $app->render('access_denied.html.twig');
//        return;
//    }
//    //
//    $productsList = DB::query("SELECT * FROM products");
//    $app->render('admin/products_list.html.twig', array('list' => $productsList));
//});
//
//$app->get('/admin/products/delete/:id', function($id) use ($app) {
//    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
//        $app->render('access_denied.html.twig');
//        return;
//    }
//    $product = DB::queryFirstRow('SELECT * FROM products WHERE id=%d', $id);
//    if (!$product) {
//        $app->render('admin/not_found.html.twig');
//        return;
//    }
//    $app->render('admin/products_delete.html.twig', array('p' => $product));
//});
//
//$app->post('/admin/products/delete/:id', function($id) use ($app) {
//    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
//        $app->render('access_denied.html.twig');
//        return;
//    }
//    $confirmed = $app->request()->post('confirmed');
//    if ($confirmed != 'true') {
//        $app->render('admin/not_found.html.twig');
//        return;
//    }
//    DB::delete('products', "id=%i", $id);
//    if (DB::affectedRows() == 0) {
//        $app->render('admin/not_found.html.twig');
//    } else {
//        $app->render('admin/products_delete_success.html.twig');
//    }
//});
//
//$app->get('/admin/products/:op(/:id)', function($op, $id = -1) use ($app) {
//    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
//        $app->render('access_denied.html.twig');
//        return;
//    }
//    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
//        echo "INVALID REQUEST"; // FIXME on Monday - display standard 404 from slim
//        return;
//    }
//    //
//    if ($id != -1) {
//        $values = DB::queryFirstRow('SELECT * FROM products WHERE id=%i', $id);
//        if (!$values) {
//            echo "NOT FOUND";  // FIXME on Monday - display standard 404 from slim
//            return;
//        }
//    } else { // nothing to load from database - adding
//        $values = array();
//    }
//    $app->render('admin/products_addedit.html.twig', array(
//        'v' => $values,
//        'isEditing' => ($id != -1)
//    ));
//})->conditions(array(
//    'op' => '(edit|add)',
//    'id' => '\d+'
//));
//
//$app->post('/admin/products/:op(/:id)', function($op, $id = -1) use ($app, $log) {
//    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'admin') {
//        $app->render('access_denied.html.twig');
//        return;
//    }
//    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
//        echo "INVALID REQUEST"; // FIXME on Monday - display standard 404 from slim
//        return;
//    }
//    //
//    $name = $app->request()->post('name');
//    $description = $app->request()->post('description');
//    $price = $app->request()->post('price');
//    //
//    $values = array('name' => $name, 'description' => $description, 'price' => $price);
//    $errorList = array();
//    //
//    if (strlen($name) < 2 || strlen($name) > 50) {
//        $values['name'] = '';
//        array_push($errorList, "Name must be between 2 and 50 characters long");
//    }
//    if (strlen($description) < 2 || strlen($description) > 1000) {
//        $values['description'] = '';
//        array_push($errorList, "Description must be between 2 and 1000 characters long");
//    }
//    if (empty($price) || $price < 0 || $price > 99999999.99) {
//        $values['price'] = '';
//        array_push($errorList, "Price must be between 0 and 99999999.99");
//    }
//    $productImage = array();
//    // is file being uploaded
//    if ($_FILES['productImage']['error'] != UPLOAD_ERR_NO_FILE) {
//        $productImage = $_FILES['productImage'];
//        if ($productImage['error'] != 0) {
//            array_push($errorList, "Error uploading file");
//            $log->err("Error uploading file: " . print_r($productImage, true));
//        } else {
//            if (strstr($productImage['name'], '..')) {
//                array_push($errorList, "Invalid file name");
//                $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($productImage, true));
//            }
//            // TODO: check if file already exists, check maximum size of the file, dimensions of the image etc.
//            $info = getimagesize($productImage["tmp_name"]);
//            if ($info == FALSE) {
//                array_push($errorList, "File doesn't look like a valid image");
//            } else {
//                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
//                    // image type is valid - all good
//                } else {
//                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
//                }
//            }
//        }
//    } else { // no file uploaded
//        if ($op == 'add') {
//            array_push($errorList, "Image is required when creating new product");
//        }
//    }
//
//    //
//    if ($errorList) { // 3. failed submission
//        $app->render('admin/products_addedit.html.twig', array(
//            'errorList' => $errorList,
//            'isEditing' => ($id != -1),
//            'v' => $values));
//    } else { // 2. successful submission
//        if ($productImage) {
//            $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $productImage['name']);
//            $imagePath = 'uploads/' . $sanitizedFileName;
//            if (!move_uploaded_file($productImage['tmp_name'], $imagePath)) {
//                $log->err("Error moving uploaded file: " . print_r($productImage, true));
//                $app->render('internal_error.html.twig');
//                return;
//            }
//            // TODO: if EDITING and new file is uploaded we should delete the old one in uploads
//            $values['imagePath'] = "/" . $imagePath;
//        }
//        if ($id != -1) {
//            DB::update('products', $values, "id=%i", $id);
//        } else {
//            DB::insert('products', $values);
//        }
//        $app->render('admin/products_addedit_success.html.twig', array('isEditing' => ($id != -1)));
//    }
//})->conditions(array(
//    'op' => '(edit|add)',
//    'id' => '\d+'
//));
//
//$app->get('/logout', function() use ($app) {
//    $_SESSION['user'] = array();
//    $app->render('logout.html.twig');
//});
//
//$app->get('/login', function() use ($app) {
//    $app->render('login.html.twig');
//});
//
//$app->post('/login', function() use ($app) {
//    $email = $app->request()->post('email');
//    $pass = $app->request()->post('pass');
//    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
//    $error = false;
//    if (!$row) {
//        $error = true; // user not found
//    } else {
//        if ($row['password'] != $pass) {
//            $error = true; // password invalid
//        }
//    }
//    if ($error) {
//        $app->render('login.html.twig', array('error' => true));
//    } else {
//        unset($row['password']);
//        $_SESSION['user'] = $row;
//        $app->render('login_success.html.twig');
//    }
//});
//
//
//$app->get('/isemailregistered/:email', function($email) use ($app) {
//    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
//    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
//});
//
//$app->get('/register', function() use ($app) {
//    $app->render('register.html.twig');
//});
//
//$app->post('/register', function() use ($app) {
//    $name = $app->request()->post('name');
//    $email = $app->request()->post('email');
//    $pass1 = $app->request()->post('pass1');
//    $pass2 = $app->request()->post('pass2');
//    //
//    $values = array('name' => $name, 'email' => $email);
//    $errorList = array();
//    //
//    if (strlen($name) < 2 || strlen($name) > 50) {
//        $values['name'] = '';
//        array_push($errorList, "Name must be between 2 and 50 characters long");
//    }
//    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
//        $values['email'] = '';
//        array_push($errorList, "Email must look like a valid email");
//    } else {
//        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
//        if ($row) {
//            $values['email'] = '';
//            array_push($errorList, "Email already in use");
//        }
//    }
//    if ($pass1 != $pass2) {
//        array_push($errorList, "Passwords don't match");
//    } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
//        if (strlen($pass1) < 2 || strlen($pass1) > 50) {
//            array_push($errorList, "Password must be between 2 and 50 characters long");
//        }
//    }
//    //
//    if ($errorList) { // 3. failed submission
//        $app->render('register.html.twig', array(
//            'errorList' => $errorList,
//            'v' => $values));
//    } else { // 2. successful submission
//        DB::insert('users', array('name' => $name, 'email' => $email, 'password' => $pass1));
//        $app->render('register_success.html.twig');
//    }
//});

$app->run();

