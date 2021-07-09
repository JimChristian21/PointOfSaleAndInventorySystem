<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => 'Jim Christian',
            'last_name' => 'Edullantes',
            'email' => 'jimchristianedullantes9@gmail.com',
            'phone_number' => '09513866175',
            'job_id' => 1,
            'hired_date'=> date('Y-m-d H:i:s'),
            'location_id' => 1,

        ]);

        DB::table('employees')->insert([
            'first_name' => 'Joan',
            'last_name' => 'Esquierdo',
            'email' => 'joanesquierdo@gmail.com',
            'phone_number' => '09513866175',
            'job_id' => 2,
            'hired_date'=> date('Y-m-d H:i:s'),
            'location_id'=> 2,

        ]);

        DB::table('employees')->insert([
            'first_name' => 'Felzen',
            'last_name' => 'Balinas',
            'email' => 'felzenbalinas@gmail.com',
            'phone_number' => '09513866175',
            'job_id' => 1,
            'hired_date'=> date('Y-m-d H:i:s'),
            'location_id'=> 3,

        ]);

        DB::table('employees')->insert([
            'first_name' => 'Steve John',
            'last_name' => 'Rubin',
            'email' => 'stevejohnrubin@gmail.com',
            'phone_number' => '09513866175',
            'job_id' => 2,
            'hired_date'=> date('Y-m-d H:i:s'),
            'location_id'=> 4,

        ]);

        DB::table('employees')->insert([
            'first_name' => 'Josua',
            'last_name' => 'Picazo',
            'email' => 'josuapicazo@gmail.com',
            'phone_number' => '09513866175',
            'job_id' => 1,
            'hired_date'=> date('Y-m-d H:i:s'),
            'location_id'=> 5,

        ]);
    }
}
