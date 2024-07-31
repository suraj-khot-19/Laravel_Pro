<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\Member;

class DbListController extends Controller
{
    function display()
    {
        // defining paggination of 5 element per page
        $data = Member::paginate(5);
        //pass to view
        return view('db_list',['data'=>$data]);
    }
}
