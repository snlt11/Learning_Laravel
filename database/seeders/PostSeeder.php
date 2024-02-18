<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file_path = public_path() . "/seeds/posts.json";
        $raw_data = file_get_contents($file_path);
        $json_data = json_decode($raw_data);
        foreach ($json_data as $data) {
            DB::table('posts')->insert([
                "title" => $data->title,
                "content" => $data->content,
                "likes" => $data->likes,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
    }
}
