<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $num1 = collect([1, 2, 3, 4, 5, 6,]);
        // $num2 = collect([6, 5, 7, 8, 9, 10, 11, 12]);
        // dd($num1);
        // return $num1->min();
        // dd($num1->take(5)->skip(3));
        // $nums = $num1->concat($num2);
        // dd($nums->unique()->keys());
        // dd($nums->contains('11'));
        // dd($nums->containsStrict('11'));
        // dd($nums->last());
        // dd($nums->first());
        // dd($nums->take(5)->sum());
        // $post = Post::orderby('id', 'desc')->get()->sortBy('name');  //Direct form the database
        // dd($post->take(5)->array());

        // $post = Post::orderby('id', 'desc')->get();
        // dd($post->take(5)->sortBy('name')->array());

        // $post = Post::get()->where('id' < 50);
        // $post = Post::get()->map(function($post){
        //     return $post->name;
        //     // return $post->description;
        // });

        // $post = Post::get()->filter(function($post){
        //     return $post->status == 0;
        // });

        // dd($post);

        return view('home');
   }
}
