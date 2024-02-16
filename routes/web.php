<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::middleware('auth')->group(function(){
//     Route::get('/', fn () => view('welcome'))->name('welcome');
//     Route::get('/user/home', fn () => view('users.home'))->name('user.home');
// });

Route::get('/', fn () => view('welcome')->with('title', "You are welcome"))->name('welcome');
Route::get('/user/home', fn () => view('users.home'))->name('user.home');

Route::get('/user/register', function () {
    if (Auth::user()) {
        return redirect()->back();
    }
    return view('users.register');
})->name('user.register');
Route::post('/user/register', [UserAuthController::class, 'register'])->name('register');

Route::get('/user/login', function () {
    if (Auth::user()) {
        return redirect()->back();
    }
    return view('users.login')->with('title', 'Login Page');
})->name('user.login');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('login');

Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('logout');
