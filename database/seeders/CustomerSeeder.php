<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'first_name' => 'Kaido',
            'last_name' => 'Beast',
            'phone_number' => '09264788829',
        ]);

        DB::table('customers')->insert([
            'first_name' => 'Big',
            'last_name' => 'Mom',
            'phone_number' => '09264788829',
        ]);

        DB::table('customers')->insert([
            'first_name' => 'Gol D.',
            'last_name' => 'Roger',
            'phone_number' => '09264788829',
        ]);

        DB::table('customers')->insert([
            'first_name' => 'Oden',
            'last_name' => 'Kuzoki',
            'phone_number' => '09264788829',
        ]);

        DB::table('customers')->insert([
            'first_name' => 'Luffy',
            'last_name' => 'Monkey',
            'phone_number' => '09264788829',
        ]);
    }
}
