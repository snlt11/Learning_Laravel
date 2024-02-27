<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $post = Post::get()->load('comment');
        // $post = Comment::where('is_active', 1)->get();
        // $post = Post::whereHas('comment', function ($query) {
        //     return $query->where('likes', '>', 50);
        // })->get()->load('comment');
        // dd($post->toArray());
        // $comment = Comment::find(1)->load('post');

    }
}
