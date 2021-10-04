<?php


include_once "../config.php";

include_once "../lib/helpers.php";

include_once "../lib/route/Route.php";

include_once "../lib/request/Request.php";

include_once "../lib/view/View.php";


Route::get('/',function(){
    return view('home');
});


Route::get('post',function(Request $request){
    return view('post');
});

Route::get('/users',function(){
    echo "this is users page";
});


Route::post('/save',function(){
    return "post method called";
});






$route = new Route();
echo $route->run();




