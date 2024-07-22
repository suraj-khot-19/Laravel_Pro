<?php

use Illuminate\Support\Facades\Route;

//home route
Route::get('/',function(){
    // return view('welcome');
    //how to redirecting to some other page
    return redirect('contact');
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