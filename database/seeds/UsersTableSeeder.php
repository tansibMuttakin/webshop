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
                'role_id' => 3,
                'name' => 'Tansib',
                'email' => 'tansib.muhaimin@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$znq.GNvFUeKDltbQCSPRJeu932w923FwE2H40HoTOoXbPkTUZ9uI6',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-18 10:12:58',
                'updated_at' => '2020-04-26 11:17:22',
            ),
            1 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Em5vO0k2kvr6/y8O9FKWkeUFomoQFEFrEqha.RJS2otMgDeMZ4/6e',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-20 07:25:41',
                'updated_at' => '2020-04-20 07:25:41',
            ),
            2 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Bushra',
                'email' => 'bushra@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Y1KVq61C/mhRKYgC669zq.8dEzP3Na.KnHkgfELISHrUiTOtylnES',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-24 08:16:25',
                'updated_at' => '2020-04-24 08:16:25',
            ),
            3 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Afia Bushra',
                'email' => 'afiabushra@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Lhtfyj4B2nCPJU5nLGbtiO4/Xuyx2cVSJy1XH4wsOfDDcjgTR7iSS',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-30 08:10:24',
                'updated_at' => '2020-04-30 08:11:57',
            ),
        ));
        
        
    }
}