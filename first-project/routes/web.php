<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HtmlFormController;
use App\Http\Controllers\HTTpAllMethods;
use App\Http\Controllers\httpclientController;
use App\Http\Controllers\mysqldb;
use App\Http\Controllers\mysqldb2;
use App\Http\Controllers\PhpExampleController;
use Illuminate\Support\Facades\Route;

//importing controller
use App\Http\Controllers\user;

//home route
Route::get('/', function () {
    return view('welcome');
    //how to redirecting to some other page
    // return redirect('contact');
});

//contact route
Route::view('/contact', "contact");

//about route
Route::view("/about", "about");

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
//passing data from url 
Route::get("user/{username}", [user::class, "printing"]);

//democontroller route
Route::get("democ/{company}", [DemoController::class, "loadView"]);

//php code controller
Route::get("php", [PhpExampleController::class, "loadView"]);

//blade code
Route::view('/blade', "blade_code");

//routes for html form
//1. one for controller
Route::get("loginform", [HtmlFormController::class, "fetchData"]);
//2. one for view
Route::view('login', 'html_form');

//route for redirect page
Route::view('redirect', 'redirect');

//route for group middleware
Route::group(['middleware' => ['GroupMiddleware']], function () {
    //add any routes to add middleware to here
    Route::view('demo', 'groupmiddleware');
    // Route::view('login', 'html_form');
});



// route midd..
// Route::get("php", [PhpExampleController::class, "loadView"])->middleware('routemiddleware1');

// can we add two middlewares for one view==>yessss
// Route::view('/blade', "blade_code")->middleware('routemiddleware1', 'routemiddleware2');

//myysqldb (controller)
Route::get('students',[mysqldb::class,'db']);

//myysqldb2 (controller)
Route::get('users', [mysqldb2::class, 'db']);

//http client 
Route::get('http',[httpclientController::class, 'fetchDataFrom']);

//http all mehods
Route::delete('userlog',[HTTpAllMethods::class,'methods']);
//for login form
Route::view('log', 'login_forms');