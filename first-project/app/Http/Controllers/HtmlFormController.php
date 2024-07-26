<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlFormController extends Controller
{
    //function to fetch data and return
    function fetchData(Request $request)
    {
        $request->validate([
            'username' => 'required  | max:10',
            'password' => 'required | min:6'
        ]);
        return $request;
    }
}
