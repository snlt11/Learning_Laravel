<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $filePath = public_path()."/seeds/user_roles.json";
        $raw_data = file_get_contents($filePath);
        $json_data = json_decode($raw_data);
        foreach ($json_data as $json) {
            DB::table('role_users')->insert([
                'role_id' => $json->role_id,
                'user_id' => $json->user_id
            ]);
        }

    }
}
