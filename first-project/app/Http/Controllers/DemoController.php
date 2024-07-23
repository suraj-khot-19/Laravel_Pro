<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //calling view from controller
    function loadView($arg){
        //simply returing about view
        return view('about',['argument'=>$arg]);
    }
}
