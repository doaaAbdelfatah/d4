<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    function show(){
        $products = ["Mobile" ,"Tab" ,"Phone" ,"Test"];
        return view("page1" ,["products" =>$products]);
    }

    function show_all()
    {
        $products = DB::table('products')->get();
      //  $products = DB::table('products')->where('id' ,2)->get();
      //  $products = DB::table('products')->where('price' ,'>=',150)->get();

       // dd($products);
    //    return view("products")
    //    ->with("products" ,$products);

       return view("products" ,["prods" =>$products ]);

    }

    function store(Request $request)
    {

        // validate

        $name = $request->input("name");
        $price = $request->input("price");

        $id = DB::table('products')->insertGetId(
                ["name"=>$name ,"price"=>$price]
            );
            //echo $id;
            //   return redirect()->action("ProductController@show_all");
            //return redirect()->route("products"); // named route
            return redirect()->back();
          //return redirect("/products/all");
        // $rslt = DB::table('products')->insert(
        //   [
        //     ["name"=>"aaa" ,"price"=>500],
        //     ["name"=>"bbbb" ,"price"=>600]
        //  ]
        // );
        // var_dump($rslt);
    }
}
