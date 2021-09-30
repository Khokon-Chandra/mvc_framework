<?php

class Request
{
    public function getPath()
    {
        $path = empty(trim($_SERVER['REQUEST_URI'],'/'))? '/' : trim($_SERVER['REQUEST_URI'],'/');
        return $path;
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}