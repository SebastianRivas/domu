<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identification_types')->insert([
            'name' => 'None',
            'description' => 'None',
        ]);

        DB::table('identification_types')->insert([
            'name' => 'Passport Card',
            'description' => 'Passport Card',
        ]);

        DB::table('identification_types')->insert([
            'name' => 'Driver\'s License',
            'description' => 'Driver\'s License',
        ]);

        DB::table('identification_types')->insert([
            'name' => 'Permanent Resident Card',
            'description' => 'Permanent Resident Card',
        ]);

        DB::table('identification_types')->insert([
            'name' => 'DNI',
            'description' => 'DNI',
        ]);
    }
}
