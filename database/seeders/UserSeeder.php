<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->insert([
            'email' => 'jimchristianedullantes9@gmail.com',
            'password' => Hash::make('12345678'),
            'employee_id' => 1,
            'type_id'=> 1,
        ]);

        DB::table('users')->insert([
            'email' => 'joanesquierdo@gmail.com',
            'password' => Hash::make('12345678'),
            'employee_id' => 2,
            'type_id'=> 2,
        ]);

        DB::table('users')->insert([
            'email' => 'felzenbalinas@gmail.com',
            'password' => Hash::make('12345678'),
            'employee_id' => 3,
            'type_id'=> 1,
        ]);

        DB::table('users')->insert([
            'email' => 'stevejohnrubin@gmail.com',
            'password' => Hash::make('12345678'),
            'employee_id' => 4,
            'type_id'=> 2,
        ]);

        DB::table('users')->insert([
            'email' => 'josuapicazo@gmail.com',
            'password' => Hash::make('12345678'),
            'employee_id' => 5,
            'type_id'=> 1,
        ]);
    }
}
