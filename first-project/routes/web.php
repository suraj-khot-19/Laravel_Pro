<?php

use Illuminate\Support\Facades\Route;

//importing controller
use App\Http\Controllers\user;

//home route
Route::get('/',function(){
    return view('welcome');
    //how to redirecting to some other page
    // return redirect('contact');
});

//contact route
Route::view('/contact', "contact");

//about route
Route::view("/about","about");

/*

//how to send data throw route
Route::get("/contact/{contact_number}", function($contact_number){
    //we can echo data throw URL
    echo("This is simply echoing $contact_number");
    return view("contact",['ph_no'=>$contact_number]);
});

*/


/*
//calling controller before laravel 8

syntax was:
Route::get("url","ControllerClassName@FunctionName");


Route::get("laravel7","user@printing");
*/

//calling controller after laravel 8
/*
syntax:

//importing controller
use App\Http\Controllers\user;

Route::get('url', [ControllerClassName::class,"FunctionWhichYouWantToCall"] );

*/
Route::get("user/{username}",[user::class,"printing"]);


