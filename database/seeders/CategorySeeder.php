<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert category
        DB::table('category')->insert([
            'id' => 1,
            'name'=> 'Cà phê',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('category')->insert([
            'id' => 2,
            'name'=> 'Soda',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('category')->insert([
            'id' => 3,
            'name'=> 'Đá xay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")            
        ]);
        DB::table('category')->insert([
            'id' => 4,
            'name'=> 'Trà',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('category')->insert([
            'id' => 5,
            'name'=> 'Trà sữa',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('category')->insert([
            'id' => 6,
            'name'=> 'Yaourt',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // Delete category_id
        //DB::table('category')->where('id', '4')->delete();
    }
}
