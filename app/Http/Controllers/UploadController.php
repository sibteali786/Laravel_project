<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function uploadFile(Request $req)
    {
        return $req->file('file')->store('docs');   // file method argument is name of the file 
    }
}
