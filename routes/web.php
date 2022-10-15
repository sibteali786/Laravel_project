<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserListController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user');
});

Route::view("contact", '/contact');
Route::post("user", [UserAuth::class, 'userLogin']);
// Route::view("login", "login");
Route::view('profile', 'profile');
Route::get('/login', function () {
    if (session()->has('user')) {
        redirect('profile');
    }
    return redirect('login');
});
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});

// Flash session example 
Route::view('add', 'add');
Route::post('addmember', [AddMember::class, 'add']);

Route::get('about', [AboutController::class, 'checkIfRoute']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::get('user', [UserController::class, 'index']);
Route::get('account', [AccountController::class, 'getData']);


// File upload 
Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'uploadFile']);


// localization 
// Route::view('localization', 'localization');
Route::get('/localization/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('localization');
});


// listing the users from database 
Route::get('userlist', [UserListController::class, 'show']);
