<?php
use test\MyClass;
use lib\route\Route;

include "../config.php";
include "../lib/helpers.php";

spl_autoload_register(function($className){
    $filename = $className.".php";
    $filename = BASE_URL."/".$filename;

    if(!file_exists($filename)){
        echo $filename." file doesn' exitst";
        exit();
    }

    include_once $filename;
   
});

include_once "../routes/web.php";




$route = new Route();
echo $route->run();









