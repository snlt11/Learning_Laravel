<?php


use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/', 'welcome')->name('welcome');














































// Route::view('/home', 'Home')->name('home');

// Route::get('/hey/{id}/{uid}', fn ($id, $uid) => "id is $id and uid is $uid")->name('hey');

// Route::get('/verify', function (Request $request) {

//     echo $request->hasValidSignature() ? "success" : "Failure";
// })->name('verify');


// Route::prefix('/post')->group(function () {

//     Route::get('/', fn () => "all is well")->name('post.all');

//     Route::get('/{id}', fn ($id) => "posting with id $id")->name('post.single');

//     Route::get('/{id}/edit', fn ($id) => "Post Edit with id $id")->name('post.edit');

//     Route::get('/{id}/{name}/edit', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('post.edit2');


//     Route::get('/{id}/edit/{name}', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('post.edit3');
// });


// Route::name('post.')->group(function () {

//     Route::get('/post', fn () => "all is well")->name('all');

//     Route::get('/post/{id}', fn ($id) => "posting with id $id")->name('single');

//     Route::get('/post/{id}/edit', fn ($id) => "Post Edit with id $id")->name('edit');

//     Route::get('/post/{id}/{name}/edit', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('edit2');

//     Route::get('/post/{id}/edit/{name}', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('edit3');
// });

// Route::group(['prefix' => '/post', 'middleware' => 'guest'], function () {

//     Route::get('/', fn () => "all is well")->name('post.all');

//     Route::get('/{id}', fn ($id) => "posting with id $id")->name('post.single');

//     Route::get('/{id}/edit', fn ($id) => "Post Edit with id $id")->name('post.edit');

//     Route::get('/{id}/{name}/edit', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('post.edit2');

//     Route::get('/{id}/edit/{name}', fn ($id, $name) => "Post Edit with id $id Name is $name")->name('post.edit3');
// });
