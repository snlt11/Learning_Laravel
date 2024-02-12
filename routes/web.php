<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

$users = [
    "name" => "mgmg",
    "age" => 22
];

Route::get('/', fn () => view('welcome', ['users' => $users]))->name('welcome');

Route::get('/user/register', fn () => view('users.register'))->name('user_register');
Route::post('/user/register', [UserAuthController::class, 'register'])->name('register');

Route::get('/user/login', fn () => view('users.login')->with('title', 'Login Page'))->name('user_login');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('login');

Route::get('/user/home', fn () => view('users.home'))->name('user_home');
