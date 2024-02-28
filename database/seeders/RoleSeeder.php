<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ["Admin", "Manager", "Supervisor", "User"];
        $roleIndex = 1;
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                "name" => $role,
                "level" => $roleIndex
            ]);
            $roleIndex++;
        }
    }
}
