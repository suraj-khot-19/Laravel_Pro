<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class mysqldb2 extends Controller
{
    function db(){
        //User==> App\Models\User
        //all==> Get all of the models from the database.
        return User::all();
    }
}
