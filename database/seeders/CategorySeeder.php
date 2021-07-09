<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Food',
            'description' => 'Food',
        ]);

        DB::table('category')->insert([
            'name' => 'Tools',
            'description' => 'Equipments',
        ]);

        DB::table('category')->insert([
            'name' => 'Home Equipments',
            'description' => 'Home Equipments',
        ]);

        DB::table('category')->insert([
            'name' => 'utensils',
            'description' => 'food utensils',
        ]);

        DB::table('category')->insert([
            'name' => 'hardware',
            'description' => 'hardware',
        ]);
    }
}
