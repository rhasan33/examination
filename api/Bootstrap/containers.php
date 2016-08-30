<?php
use App\Controllers\Users as Users;
use Noodlehaus\Config;

$container = $app->getContainer();

$container['Users'] = function(){
    return new Users;
};

/*$container['config'] = function($container){
    return new Config(INC_ROOT . '/App/Config/development.php');
};*/