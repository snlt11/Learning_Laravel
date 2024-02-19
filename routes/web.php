<?php


use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/', 'welcome')->name('welcome');

Route::get('/verify',function(Request $request){

    echo $request->hasValidSignature() ? "success" : "Failure";
    
})->name('verify');

Route::get('/posts', fn () => "all is well")->name('posts');

Route::get('/post/{id}', fn ($id) => "posting with id $id")->name('single.post');

Route::get('/post/{id}/edit', fn ($id) => "Post Edit with id $id")->name('post.edit');

Route::get('/post/{id}/{name}/edit', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('post.edit2');


Route::get('/post/{id}/edit/{name}', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('post.edit3');
