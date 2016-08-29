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

$container = new \Slim\Container($configuration);
$app = new \Slim\App($container);

include_once __DIR__ . '/../app/routes.php';
