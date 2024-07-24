<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpExampleController extends Controller
{
    function loadView()
    {
        $a = 10;
        $b = 20;
        $arr = [12, 45, 65, 74, 68, 12];
        return view('php_code', ['a' => $a, 'b' => $b, 'arr' => $arr]);
    }
}
