<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Post;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $product = Product::find(1);
        // $product->comments()->create([
        //     'content' => 'testing 1'
        // ]);
        // $post = Post::with('comments')->find(1);
        // $post = Product::with('comments')->find(1);
        // $post->comments()->createMany([
        //     ['content' => 'testing one for post'],
        //     ['content' => 'testing two for post'],
        //     ['content' => 'testing three for post'],
        // ]);
        // $product = Product::with('comments')->find(1);
        // $product->comments()->where('id', 1)->update([
        //     'content' => 'new first content'
        // ]);
        $product = Product::with('comments')->find(1);
        $product->comments()->where('id', 1)->delete();
        // dd($product->toArray());
    }
}
