<?php

use lib\view\View;

function view($filename)
{
    $obj = new View();
    $obj->renderView($filename);
}