<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file_path = public_path().'/seeds/categories.json';
        $raw_file = file_get_contents($file_path);
        $json_data = json_decode($raw_file);
        foreach ($json_data as $data){
            DB::table('categories')->insert([
                "name" => $data->name,
                "price" => $data->price,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }

    }
}
