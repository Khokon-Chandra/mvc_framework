<?php

use lib\view\View;

function view($filename)
{
    $obj = new View();
    $obj->renderView($filename);
}

function dd($param)
{
    echo "<pre>";
     print_r($param);
     
}












