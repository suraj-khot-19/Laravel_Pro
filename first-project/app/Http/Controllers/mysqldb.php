<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mysqldb extends Controller
{
    function db()
    {
       return DB::select('select * from student');
    //    return DB::select('select name from student');
    //    return DB::select('select name from student where id=1');
    }
}
