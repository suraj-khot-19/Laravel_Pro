<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessionController extends Controller
{
    function addMember(Request $request)
    {
        $data = $request->input('username');
        // $request->session()->flash('user', $data);
        return redirect('flash');
    }
}
