<?php

namespace App\Http\Controllers;
//import model
use App\Models\Member;
use Illuminate\Http\Request;

class DeleteDataController extends Controller
{
    function deleteData()
    {
        //Get all of the models from the database.
        $data = Member::all();
        return view('delete_member', ['data' => $data]);
    }
    function deleting($id)
    {
        //creating flash for notify user
        session()->flash('message' ,'record deleted successfully');

        //Get all of the models from the database.
        $data = Member::find($id);
        $data->delete();
        return redirect('delete');
    }
}
