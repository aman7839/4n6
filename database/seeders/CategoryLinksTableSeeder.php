<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_links')->insert(array(
                      
            array(
                'catid'=> '1',
                'title'=>'name',
                'address'=>'test',
                'description'=>'test1',
                 
            ),
            array(
                'catid'=> '1',
                'title'=>'name',
                'address'=>'test',
                'description'=>'test1',
            ),
            array(
                'catid'=> '2',
                'title'=>'name',
                'address'=>'test',
                'description'=>'test1',
            ),
            array(
                'catid'=> '2',
                'title'=>'name',
                'address'=>'test',
                'description'=>'test1',
            ),
            array(
                'catid'=> '2',
                'title'=>'name',
                'address'=>'test',
                'description'=>'test1',
            )
            ));
    }
}
