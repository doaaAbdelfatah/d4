<?php
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
// Route::get("/test" , function (){
//    // echo "Welcome ";
//    return view ("test");
// });
Route::get("/hello" ,"MyController@index");
Route::get("/add/{x}/{y}/{z?}" ,"CalcController@add");
Route::get("/sss/{x}/{y}" ,"CalcController@sub");
Route::get("/mul/{x}/{y}" ,"CalcController@multiply");

Route::get("/show/{x}/{y}" ,"ViewTestController@index");

Route::get("/about" ,"ViewTestController@about");
Route::get("/home" ,"ViewTestController@home");

Route::get("/products" ,"ProductController@show");


Route::get("/features" ,function(){
    $data = ["name"=>"ahmed" , "salary" =>5800, "job" =>"sales" ,
    "clients" =>["ahmed" ,"dina" ,"sara"]  ];
    return view("features")
    ->with("msg" ,"<b>Hello</b>")
    ->with("data" ,$data);
});

Route::view('/ww', 'welcome' );

Route::get("/test/{xx}/{yy}" , function($name){
    echo "Welcome $name";
})->where(["xx" =>"[0-9]?[A-Z]+@[a-z]+" , "yy" =>'[Aa][Aa]X$' ]);


Route::get("/search/{by}" ,function ($x){
    echo $x;
})->where("by" , ".*");

Route::get("/data/show" ,function (){

    $data = ["name"=>"ahmed" , "salary" =>5800, "job" =>"sales" ,
    "clients" =>["ahmed" ,"dina" ,"sara"]  ];
   // var_dump($data);
   // json resopnse
    return $data;
   //return response()->json($data);

});

Route::get("/put/{name}" , function ($name){

    return response("aaa" , 200)->withcookie("name" , $name )
    ->withcookie("pw" , "123"  );
});


Route::get("/get" ,function (Request $request){
    //dd($request->cookie("name"));
    // plain text
    echo $request->cookie("name")  , " - " , $request->cookie("pw");
});

Route::get("/download" , function (){
 return response()->download("data.txt");
});

Route::get("/file" , function (){
    return response()->file("data.txt");
});


Route::get("/jobs" ,"DBController@index");
Route::get("/jobs/show" ,"DBController@show");
Route::get("/products/all" ,"ProductController@show_all")->name("products");
Route::post("/products/add" ,"ProductController@store");
