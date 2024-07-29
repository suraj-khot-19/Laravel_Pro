<?php

use App\Http\Controllers\FlashSessionController;
use App\Http\Controllers\LoginForm;
use Illuminate\Support\Facades\Route;

//welcome page
Route::view('/', 'welcome');

//user login controller
Route::post('userContoller', [LoginForm::class, 'UserLogin']);

//login page
Route::get('/login', function () {
    if (session()->has('user')) {
        //if have user key then redirect to profile page
        return redirect('/profile');
    } else {
        //if not return login page
        return view('login_form');
    }
});


//profile page
Route::get('/profile', function () {
    if (session()->has('user')) {
        //check this for better security if have user key then show view
        return view('profile');
    } else {
        //else return login form
        return  redirect('/login');
    }
});

//route for logout
Route::get('/logout', function () {
    if (session()->has('user')) {
        //if have user key then delete it
        session()->pull('user');
    }
    //and then redirect to login page
    return redirect('/login');
});

//flash session view
Route::view('flash', 'flash_session');

//post route for flash session controller
Route::post('addmember',[FlashSessionController::class, 'addMember']);