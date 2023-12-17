<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolepermission')->insert([            
            'roleID' => '1',
            'PermissionID' => '1'
        ]);
        DB::table('rolepermission')->insert([            
            'roleID' => '1',
            'PermissionID' => '2'
        ]);
        DB::table('rolepermission')->insert([            
            'roleID' => '1',
            'PermissionID' => '3'
        ]);

        DB::table('rolepermission')->insert([            
            'roleID' => '2',
            'PermissionID' => '1'
        ]);
        DB::table('rolepermission')->insert([            
            'roleID' => '2',
            'PermissionID' => '2'
        ]);
        
        DB::table('rolepermission')->insert([            
            'roleID' => '3',
            'PermissionID' => '1'
        ]);        
    }
}
