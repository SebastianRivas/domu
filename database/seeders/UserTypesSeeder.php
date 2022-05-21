<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'Administrator',
            'description' => 'Administrator',
        ]);

        DB::table('user_types')->insert([
            'name' => 'Seller',
            'description' => 'Seller',
        ]);

        DB::table('user_types')->insert([
            'name' => 'Buyer',
            'description' => 'Buyer',
        ]);

        DB::table('user_types')->insert([
            'name' => 'Guest',
            'description' => 'Guest',
        ]);
    }
}




