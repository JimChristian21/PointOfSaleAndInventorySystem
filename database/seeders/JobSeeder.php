<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'title' => 'Administrator',
            'salary' => 20000,
        ]);

        DB::table('jobs')->insert([
            'title' => 'Cashier',
            'salary' => 10000,
        ]);
    }
}
