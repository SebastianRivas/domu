<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_type' => 1,
            'email' => 'domu.admin@domu.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('profiles')->insert([
            'user_id' => 1, 
            'identification_type' => 1, 
            'identification_number' => 0, 
            'first_name' => 'DOMU', 
            'last_name' => 'ADMIN', 
            'phone_number' => '+1900000000',
            'age' => 0,
        ]);
    }
}




