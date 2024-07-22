<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //function in controller
    function printing($comming){
        echo "$comming This is controller echoing";
    }
}
?>