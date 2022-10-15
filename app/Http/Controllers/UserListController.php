<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    //
    function show()
    {
        $data = Account::all();
        return view('userlist', ['users' => $data]);
    }
}
