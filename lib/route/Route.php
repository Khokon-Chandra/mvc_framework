<?php


class Route
{
    protected Request $request;
    protected View $view;

    public static $routes = [];

    public function __construct()
    {
        $this->request = new Request();
        $this->view    = new View();
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
            return $this->view->renderView('404.php');
        }
    
        return call_user_func($callback,$this->request);
      
    }

}