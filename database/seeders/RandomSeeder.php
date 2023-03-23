<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('random')->insert(array(
            array(
            'characters' => "minimum",
            'locations' => 'maximun',
            'situations' => 'height',
            ),
            array(
                'characters' => "minimum",
                'locations' => 'maximun',
                'situations' => 'height',
            ),
            array(
                'characters' => "minimum",
                'locations' => 'maximun',
                'situations' => 'height',
            ),
            array(
                'characters' => "minimum",
                'locations' => 'maximun',
                'situations' => 'height',
            ),
            array(
                'characters' => "minimum",
                'locations' => 'maximun',
                'situations' => 'height',
            ),
            array(
                'characters' => "minimum",
                'locations' => 'maximun',
                'situations' => 'height',
            )
            ));
    }
}
