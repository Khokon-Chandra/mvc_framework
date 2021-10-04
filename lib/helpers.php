<?php

function view(String $filename){
    $view = new View();
    return $view->renderView($filename);
}