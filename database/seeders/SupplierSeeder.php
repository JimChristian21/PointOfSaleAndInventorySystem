<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'company_name' => 'Unilever',
            'location_id' => 6,
            'phone_number' => '09264788829',
        ]);
        
        DB::table('suppliers')->insert([
            'company_name' => 'Gaisano',
            'location_id' => 7,
            'phone_number' => '09264788829',
        ]);

        DB::table('suppliers')->insert([
            'company_name' => 'Roy Plaza',
            'location_id' => 8,
            'phone_number' => '09264788829',
        ]);

        DB::table('suppliers')->insert([
            'company_name' => 'NVM',
            'location_id' => 9,
            'phone_number' => '09264788829',
        ]);

        DB::table('suppliers')->insert([
            'company_name' => 'Robinson',
            'location_id' => 10,
            'phone_number' => '09264788829',
        ]);
    }
}
