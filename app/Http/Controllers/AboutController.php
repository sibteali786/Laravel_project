<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function checkIfRoute()
    {
        if (view()->exists('about')) {
            return view('about');
        }
    }
}
