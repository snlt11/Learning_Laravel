<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $user = User::with('roles')->find(1);
        // $role = Role::with('users')->get();
        $user = User::find(1);
        // $user->roles()->attach([1, 2]);
        // $user->roles()->detach([1, 2]);
        // $user->roles()->sync(3); //Replace with new roles
        // $user->roles()->syncWithoutDetaching(2);
        $user->roles()->syncWithoutDetaching([1 => ["created_at"=>now()]]);
        dd($user->roles->toArray());
    }
}
