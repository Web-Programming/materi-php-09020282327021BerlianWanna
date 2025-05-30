<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users") -> insert([
            'name' => 'Administrator',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make("87654321"),
            'level' => 'admin',
        ]);

    }
}
