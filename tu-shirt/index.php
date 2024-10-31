<?php

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);

    define('URL', "http://localhost/tu-shirt");

    require_once "Config/Autoload.php";
    Config\Autoload::run();

    require_once "Views/_template/template.php";


    Config\Enrutador::run(new Config\Request());


?>