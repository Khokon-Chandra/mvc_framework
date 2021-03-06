<?php

namespace lib\route;

use app\Controllers\IndexController;
use lib\request\Request;
class Route
{
    protected Request $request;

    public static $routes = [];

    public function __construct()
    {
        $this->request = new Request();
    }
      
    
    public static function get($path, $callback)
    {
        $path = empty(trim($path,'/')) ? '/' : trim($path,'/');        
        self::$routes['get'][$path] = $callback;
        
    }

    public static function post($path, $callback)
    {
        $path = empty(trim($path,'/')) ? '/' : trim($path,'/');
        self::$routes['post'][$path] = $callback;
        
    }


    public function run()
    {
        $requestMethod = $this->request->getMethod();
        $requestPath   = $this->request->getPath();
       
        $callback      = self::$routes[$requestMethod][$requestPath]??false;
        
        if($callback === false){
            return "404<br> Page not found";
        }
        
        if(is_array($callback)){
           
            $callback[0] = new $callback[0]();
        }
       
        return call_user_func($callback,$this->request);
      
    }

}