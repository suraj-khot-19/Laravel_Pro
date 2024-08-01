<?php

use App\Http\Controllers\AddMemebrController;
use App\Http\Controllers\DbListController;
use App\Http\Controllers\DeleteDataController;
use App\Http\Controllers\FlashSessionController;
use App\Http\Controllers\LoginForm;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
Route::post('addmember', [FlashSessionController::class, 'addMember']);

//upload file view
Route::view('upload', 'upload_file');

//upload file controller
Route::post('upload_controller', [UploadController::class, 'uploading']);

//localiztaion
Route::get('lang/{la}', function ($la) {
    //Set locale information
    App::setlocale($la);
    return view('locale_lang');
});

//for dblist controller
Route::get('db', [DbListController::class, 'display']);

// for adding members
Route::view('add', 'add_member');

//for adding member controller
Route::post('adding', [AddMemebrController::class, 'addMember']);

//delete member route
Route::get('delete',[DeleteDataController::class, 'deleteData']);
//for delete a href
Route::get('deleting/{name}', [DeleteDataController::class, 'deleting']);
