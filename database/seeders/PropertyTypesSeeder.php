<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->insert([
            'name' => 'None',
            'description' => 'None',
        ]);

        DB::table('property_types')->insert([
            'name' => 'Family House',
            'description' => 'Family House',
        ]);
    }
}
