<?php

require_once '..vendor/autoload.php';

// Container
$container = new \Slim\Container;

// Array key to append
$container['view'] = function ($c) {
  $view = new\Slim\Views\Twig('/templates', 
          ['cache' => '../cache']);  
  
  // Twig extension
  $view->addExtension(new \Slim\Views\TwigExtension(
          $c['router'],
          $c['request']->getUri()
          ));
  
          return $view;
};

$app = new\Slim\App($container);

require_once 'routes.php';