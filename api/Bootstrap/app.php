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

$container = $app->getContainer();

$container['Users'] = function($container){
    return new App\Controllers\Users();
};

include_once __DIR__ . '/../App/routes.php';
