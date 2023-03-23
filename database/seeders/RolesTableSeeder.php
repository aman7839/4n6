<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
        ]);
        
        DB::table('role')->insert([
            'role_name' => 'Students',
            'role_slug' => 'students',
        ]);
        
        DB::table('role')->insert([
            'role_name' => 'Coaches',
            'role_slug' => 'coaches',
        ]);
    }
}
