<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index()
    {
        // echo "Hello";
        return view("test");
    }
}
