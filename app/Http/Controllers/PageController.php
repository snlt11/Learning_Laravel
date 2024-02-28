<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        // $user = User::with('book')->find(1);
        $book = User::with('bookDetail')->find(1);
        dd($book->toArray());
    }
}
