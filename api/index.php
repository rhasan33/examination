<?php
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request as Request;
require_once __DIR__ . '/vendor/autoload.php';
include_once  __DIR__."/controllers/user.php";
include_once  __DIR__.'/controllers/auth.php';
$user = new User();
$auth = new Authentication();
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
    ],
];

//initializing the project classes
$container = new \Slim\Container($configuration);
$app = new \Slim\App($container);

$app->get('/test', $user->user());

$app->run();
