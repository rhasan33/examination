<?php
return [
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