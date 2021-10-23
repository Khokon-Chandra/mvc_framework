<?php

use lib\request\Request;
use lib\route\Route;


Route::get('/admin',function(){
    view('admin.dashboard');
});


Route::get('/',function(){
   view('home');
});

Route::get('post',function(Request $request){
    view('post');
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
