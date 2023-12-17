<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'id' => 1,
            'categoryID' => 1,
            'name' => 'Cà phê đen đá',
            'price' => 19000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 2,
            'categoryID' => 1,
            'name' => 'Cà phê sữa đá',
            'price' => 23000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 3,
            'categoryID' => 2,
            'name' => 'Soda Việt Quất',
            'price' => 29000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 4,
            'categoryID' => 2,
            'name' => 'Soda Dâu',
            'price' => 29000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 5,
            'categoryID' => 3,
            'name' => 'Chocolate Đá Xay',
            'price' => 35000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 6,
            'categoryID' => 3,
            'name' => 'Matcha Đá Xay',
            'price' => 35000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 7,
            'categoryID' => 4,
            'name' => 'Trà Đào',
            'price' => 27000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 8,
            'categoryID' => 4,
            'name' => 'Trà Đào Cam Sả',
            'price' => 27000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 9,
            'categoryID' => 5,
            'name' => 'Hồng Trà Sữa',
            'price' => 39000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 10,
            'categoryID' => 5,
            'name' => 'Trà Sữa Olong',
            'price' => 39000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 11,
            'categoryID' => 6,
            'name' => 'Yaourt Dâu Tằm',
            'price' => 39000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('product')->insert([
            'id' => 12,
            'categoryID' => 6,
            'name' => 'Yaourt Trái Cây',
            'price' => 39000,
            'image' => 'product_test',
            'status' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
