<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'first_name' => 'Nami',
            'last_name' => 'Mugiwara',
            'location_id' => 11,
            'email' => '123@gmail.com',
            'phone_number' => '09264788829',
            'started_date' => date('Y-m-d H:i:s'),
            'ended_date' => date('Y-m-d H:i:s'),

        ]);

        DB::table('managers')->insert([
            'first_name' => 'Brook',
            'last_name' => 'Mugiwara',
            'location_id' => 12,
            'email' => '123@gmail.com',
            'phone_number' => '09264788829',
            'started_date' => date('Y-m-d H:i:s'),
            'ended_date' => date('Y-m-d H:i:s'),

        ]);

        DB::table('managers')->insert([
            'first_name' => 'Franky',
            'last_name' => 'Mugiwara',
            'location_id' => 13,
            'email' => '123@gmail.com',
            'phone_number' => '09264788829',
            'started_date' => date('Y-m-d H:i:s'),
            'ended_date' => date('Y-m-d H:i:s'),

        ]);

        DB::table('managers')->insert([
            'first_name' => 'Chopper',
            'last_name' => 'Mugiwara',
            'location_id' => 14,
            'email' => '123@gmail.com',
            'phone_number' => '09264788829',
            'started_date' => date('Y-m-d H:i:s'),
            'ended_date' => date('Y-m-d H:i:s'),

        ]);

        DB::table('managers')->insert([
            'first_name' => 'Zoro',
            'last_name' => 'Mugiwara',
            'location_id' => 15,
            'email' => '123@gmail.com',
            'phone_number' => '09264788829',
            'started_date' => date('Y-m-d H:i:s'),
            'ended_date' => date('Y-m-d H:i:s'),

        ]);
    }
}
