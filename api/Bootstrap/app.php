<?php
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request as Request;

include_once __DIR__ . '/../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true
    ]
];
$app = new \Slim\App($configuration);

<<<<<<< HEAD:api/bootstrap/app.php
$app = new \Slim\App($configuration);

$container = $app->getContainer();

$container['User'] = function($container){
    return new \App\Controllers\User;
=======
$container = $app->getContainer();
$container['User'] = function($container){
    return new App\Controllers\Users;
>>>>>>> 4d54b072ad3b662b272d6c557c522dd9d8bfdf72:api/Bootstrap/app.php
};

include_once __DIR__ . '/../App/routes.php';
