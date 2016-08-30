<?php
ini_set('display_error', true);

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request as Request;
use Illuminate\Database\Capsule\Manager as Capsule;

define('INC_ROOT', dirname(__DIR__));

include_once INC_ROOT . '/vendor/autoload.php';
$config = [
	'app' => [
		'url' 	=> 'http://examination.dev',
		'hash'	=> [
			'alog'	=> PASSWORD_BCRYPT,
			'cost'	=> 20
		]
	],
	'db' => [
		'driver'    => 'mysql',
		'host'      => 'localhost',
		'database'  => 'database',
		'username'  => 'root',
		'password'  => 'password',
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => '',
	],
	'settings' => [
		'displayErrorDetails' => true,
		'determineRouteBeforeAppMiddleware' => true,
	]
];
$app = new \Slim\App($config);

include_once INC_ROOT . '/Bootstrap/containers.php';

include_once INC_ROOT . '/App/routes.php';