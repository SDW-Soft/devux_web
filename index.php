<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
require 'config.php';
require 'util/Auth.php';
// Also spl_autoload_register (Take a look at it if you like)
spl_autoload_register(function($class) {
	if(file_exists(LIBS . $class .".php"))
    require LIBS . $class .".php";
});
// Load the Bootstrap!
$bootstrap = new Bootstrap();

// Optional Path Settings
//$bootstrap->setControllerPath();
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
//$bootstrap->setErrorFile();

$bootstrap->init();