<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AddMemebrController extends Controller
{
    function addMember(Request $request)
    {
        //Create a new Eloquent model instance.
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->age = $request->age;
        $member->city = $request->city;
        // Save the model to the database.
        $member->save();
        return redirect('add');
    }
}
