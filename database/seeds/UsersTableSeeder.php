<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$sW9EhI9PuxBw54Mzjqj0RucJNrXaxd6TwmMexe25pHSpD/EbMtA8C',
                'remember_token' => NULL,
                'created_at' => '2019-01-15 08:44:16',
                'updated_at' => '2019-01-15 08:44:16',
            ),
        ));
        
        
    }
}