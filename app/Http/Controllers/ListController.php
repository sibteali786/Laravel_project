<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    function show()
    {
        $data = Account::paginate(5);
        return view("list", ['accounts' => $data]);
    }
}
