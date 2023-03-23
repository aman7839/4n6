<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('states')->insert([
            'name'=>'america',
            'description'=>'state america',
            'hidden'=>'hiiden',
            'file' => 'schools description',
            
        ]);
        
        DB::table('states')->insert([
            'name'=>'america',
            'description'=>'state america',
            'hidden'=>'hiiden',
            'file' => 'schools description',
        ]);
        
        DB::table('states')->insert([
            'name'=>'america',
            'description'=>'state america',
            'hidden'=>'hiiden',
            'file' => 'schools description',
        ]);
    }
}
