<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userrole')->insert([
            'userID' => 1,
            'roleID' => 3
        ]);

        DB::table('userrole')->insert([
            'userID' => 2,
            'roleID' => 1
        ]);

        DB::table('userrole')->insert([
            'userID' => 3,
            'roleID' => 2
        ]);
    }
}
