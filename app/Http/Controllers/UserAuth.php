<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user', $data['user']);    // storing user name in the session

        return redirect('profile');
    }
}
