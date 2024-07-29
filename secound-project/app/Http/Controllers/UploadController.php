<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function uploading(Request $request)
    {
        //Returns the original file name.It is extracted from the request from which the file has been uploaded. This should not be considered as a safe value to use for a file name on your servers.
        $filename=$request->file('myfile')->getClientOriginalName();

        //file ==>Retrieve a file from the request.
        //store ==>Store the uploaded file on a filesystem disk.
        //public function storeAs($path, $name = null, $options = [])  Store the uploaded file on a filesystem disk.
        return $request->file('myfile')->storeAs('myuploadedfiles',$filename);
    }
}
