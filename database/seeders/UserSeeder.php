<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('123456789'),
            'name' => 'Thu ngân',
            'phone' => '0384327221',
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'name' => 'Admin',
            'phone' => '0384327222',
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'username' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('123456789'),
            'name' => 'Quản lý',
            'phone' => '0384327223',
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
