<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Matheus Baptista',
                'username' => 'mb',
                'email' => 'matheus@email.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'cliente@email.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('123456')
            ]

        ]);
    }
}
