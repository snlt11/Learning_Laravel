<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// // Old Style Route
// Route::get('/tags', [TagController::class, 'index'])->name('tags');
// Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
// Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
// Route::get('/tags/{id}/edit', [TagController::class, 'edit'])->name('tags.edit');
// Route::post('/tags/{id}/edit', [TagController::class, 'update'])->name('tags.update');
// Route::get('/tags/{id}/delete', [TagController::class, 'destroy'])->name('tags.delete');
// Route::get('/tags/{id}/show', [TagController::class, 'show'])->name('tags.show');
// // Restful API Service
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');;
// Route::patch('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
// Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// // Resource Route

Route::resource('/posts', PostController::class);





















// // Route::middleware('auth')->group(function(){
// //     Route::get('/', fn () => view('welcome'))->name('welcome');
// //     Route::get('/user/home', fn () => view('users.home'))->name('user.home');
// // });

// Route::get('/', fn () => view('welcome')->with('title', "You are welcome"))->name('welcome');
// Route::get('/user/home', fn () => view('users.home'))->name('user.home');

// Route::get('/user/register', function () {
//     if (Auth::user()) {
//         return redirect()->back();
//     }
//     return view('users.register');
// })->name('user.register');
// Route::post('/user/register', [UserAuthController::class, 'register'])->name('register');

// Route::get('/user/login', function () {
//     if (Auth::user()) {
//         return redirect()->back();
//     }
//     return view('users.login')->with('title', 'Login Page');
// })->name('user.login');
// Route::post('/user/login', [UserAuthController::class, 'login'])->name('login');

// Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('logout');
