<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        // One To One
        // User => profile
        // $users = User::with('profile')->get();
        // $users = User::get()->load('profile');
        // return view('welcome', compact('users'));
        // $user1 = User::find(1)->load('profile');
        // $user1 = User::with('profile')->find(1);
        // dd($user1->toArray());

        // Profile => user
        // $profiles = Profile::get();
        // $profiles = Profile::with('user')->find(1);
        // $profiles = Profile::find(1)->load('user');
        // $profiles = Profile::get();
        // return view('welcome', compact('profiles'));
        // // dd($profiles->toArray());
        // $profile = Profile::find(1);
        // dd($profile->user);
        // dd($profile->user());

        // $user = User::get()->load('profile');
        // dd($user->toArray());
        // $profile = Profile::get()->load('user');
        // dd($profile->toArray());

        // $user = User::find(1);
        // $user->delete();

        // $user = User::has('profile')->get(); //profile User
        // $user = User::doesntHave('profile')->get();
       
    }
}
