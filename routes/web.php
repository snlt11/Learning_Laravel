<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



Route::get('/welcome', fn () => view('welcome'))->name('welcome');

Route::get('/',[PostController::class,'index'])->name('index');



Route::view('/home', 'home')->name('home');
