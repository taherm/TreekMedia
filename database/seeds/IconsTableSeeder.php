<?php

use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('icons')->delete();
        
        \DB::table('icons')->insert(array (
            0 => 
            array (
                'id' => 7,
                'image' => '56cab84070b5098ab6530cacf5b94385.png',
                'created_at' => '2019-01-16 13:35:31',
                'updated_at' => '2019-01-16 13:35:31',
            ),
            1 => 
            array (
                'id' => 8,
                'image' => 'd390e1e729af188f13d3635100008c11.jpg',
                'created_at' => '2019-01-16 13:35:39',
                'updated_at' => '2019-01-16 13:35:39',
            ),
            2 => 
            array (
                'id' => 9,
                'image' => '63fc8090319b37ee21a1a6a23cc21e32.png',
                'created_at' => '2019-01-16 13:35:43',
                'updated_at' => '2019-01-16 13:35:43',
            ),
            3 => 
            array (
                'id' => 10,
                'image' => 'a871610863dc6b0f11b967a244027c05.png',
                'created_at' => '2019-01-16 13:35:46',
                'updated_at' => '2019-01-16 13:35:46',
            ),
        ));
        
        
    }
}