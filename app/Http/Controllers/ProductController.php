<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){
        $products = ["Mobile" ,"Tab" ,"Phone" ,"Test"];
        return view("page1" ,["products" =>$products]);
    }
}
