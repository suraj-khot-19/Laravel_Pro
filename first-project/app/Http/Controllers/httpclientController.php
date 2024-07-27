<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpclientController extends Controller
{
    function fetchDataFrom(){
        $collection=Http::get('https://reqres.in/api/users?page=1');
        //here only passing data array from api
        return view('http',['dbdata'=>$collection['data']]);
    }
}
