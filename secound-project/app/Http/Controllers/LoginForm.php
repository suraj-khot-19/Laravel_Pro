<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginForm extends Controller
{
    function UserLogin(Request $request)
    {
        //Retrieve an input item from the request.
        $data = $request->input();
        //storing only username in key
        $request->session()->put('user', $data['username']);
        return redirect('profile');
    }
}
