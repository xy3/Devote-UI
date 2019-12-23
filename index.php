<?php 


require_once 'vendor/autoload.php';
require_once 'src/php/functions.inc.php';


$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory    
if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$router = new \Klein\Klein();

// Match homepage
$router->respond('GET', '/', function () {
	show("home.php");
});

$router->dispatch();