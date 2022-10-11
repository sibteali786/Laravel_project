<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function show($id)
    {
        return $id;
    }

    function viewLoad()
    {
        $data = ['adil', 'rehman', 'raheem', 'raheel'];
        return view('user', ['users' => $data]);
    }
    function index()
    {
        $collection =  Http::get('https://reqres.in/api/users?page=1');
        return view('user', ['collection' => $collection['data']]);
    }
}
