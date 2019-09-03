<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('greetingForm');
});


Route::post('greeting', function(){
   $name = request("name");
   $age = request("age");
   return view('greeting')->with('name', $name)->with('age',$age+1);
});

Route::get('product ', function(){
    return "Hello again";
});

Route::get('user/{name}', function ($name){
    return "Hello $name";
});