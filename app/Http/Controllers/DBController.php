<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Job;
class DBController extends Controller
{
    function index()
    {
        //$rslt = DB::select('select * from jobs');
        //$rslt = DB::insert('insert into jobs ( name , min_salary) values ( ? ,?)', ['IT' ,8000]);
        //$rslt = DB::update('update jobs set max_salary = 10000 where id = ?', ['4']);
        //DB::delete('delete jobs where name = ?', ['John'])
        $rslt = DB::delete('delete from jobs where id > ?', [2]);
        dd( $rslt);
    }

    function show(){
            dd( Job::all());
    }
}
