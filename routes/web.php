<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get("/test" , function (){
   // echo "Welcome ";
   return view ("test");
});
Route::get("/hello" ,"MyController@index");
Route::get("/add/{x}/{y}/{z?}" ,"CalcController@add");
Route::get("/sss/{x}/{y}" ,"CalcController@sub");
Route::get("/mul/{x}/{y}" ,"CalcController@multiply");

Route::get("/show/{x}/{y}" ,"ViewTestController@index");

Route::get("/about" ,"ViewTestController@about");
Route::get("/home" ,"ViewTestController@home");

