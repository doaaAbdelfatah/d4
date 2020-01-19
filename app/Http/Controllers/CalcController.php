<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    function add($n1 , $n2 , $n3 =0)
    {
        if ($n3 == 0)
        {
            echo "<h1>$n1 + $n2  = " , ($n1+$n2 ) ,"</h1>";
        }else
        echo "<h1>$n1 + $n2 + $n3  = " , ($n1+$n2 +$n3) ,"</h1>";
    }
    function sub($n1 , $n2)
    {
        echo "<h1>$n1 - $n2  = " , ($n1-$n2 ) ,"</h1>";
    }
    function multiply( Request $request){
        echo $request->x * $request->y;
    }
}
