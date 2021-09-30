<?php

include_once "../lib/route/Route.php";
include_once "../lib/request/Request.php";






Route::get('/',function(){
    return "This is home page";
});

Route::get('post',function(Request $request){
    return "this is post page";
});

Route::get('/users',function(){
    echo "this is users page";
});

Route::get('category',function(){
    return "this is category page";
});

Route::get('/contact',function(){
    return "this is contact page";
});

Route::post('/save',function(){
    return "post method called";
});






$route = new Route();
echo $route->run();




