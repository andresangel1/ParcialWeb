<?php
	
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	
	//dentro de nuestro localhost especificamos la carpeta raiz de nuesto sitio
	define('URL', "http://localhost/php-poo/");

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	//------------------- por el momento NO las vistas
	require_once "Views/template.php";
	
	
	Config\Enrutador::run(new Config\Request());
?>