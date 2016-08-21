<?php
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request as Request;
include_once "vendor/autoload.php";
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
    ],
];

//initializing the project classes
$container = new \Slim\Container($configuration);
$app = new \Slim\App($container);

$app->get('/test', function ($request, $response, $args) {
    return $response->write("Hello ");
});

$app->run();
