<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewTestController extends Controller
{
    function index($name , $age)
    {
    //        return view("show" ,["name" =>$name ,"age" =>$age]);
        return view ("show")
            ->with("name" , $name)
            ->with("age" , $age);
    }
    function home(){
        return view ("home");
    }
    function about(){
        $data = [
            "ahmed",
            "dina",
            "ahmed",
            "sara",
            "ahmed",
            "dina",
            "ahmed",
            "morad",

        ];
        return view ("about")->with("names",$data);
    }
}
