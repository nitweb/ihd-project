<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'admin',
            'status' => 'active',
        ]);


        //vendor
        DB::table('users')->insert([
            'name' => 'Sheikh Farid',
            'username' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'vendor',
            'status' => 'active',
        ]);


        //user
        DB::table('users')->insert([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'user',
            'status' => 'active',
        ]);
    }
}
