<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', 'http://localhost/proyecto/');

	require_once "Core/Autoload.php";
	
	Core\Autoload::run();
	Core\Routing::run( new Config\Request() );