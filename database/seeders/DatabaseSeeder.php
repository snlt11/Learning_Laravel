<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\BookDetail;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory()->count(10)->create();
        // Profile::factory()->count(10)->create();
        // Comment::factory()->count(20)->create();
        // Book::factory()->count(10)->create();
        // BookDetail::factory()->count(10)->create();
        Post::factory()->count(100)->create();
        Product::factory()->count(100)->create();

    }
}
