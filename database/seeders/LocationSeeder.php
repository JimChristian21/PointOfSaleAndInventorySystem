<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Quezon',
            'barangay' => 'Salawagan',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Manolo Fortich',
            'barangay' => 'San Miguel',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Malaybalay',
            'barangay' => 'Managok',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Lantapan',
            'barangay' => 'Poblacion',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Maramag',
            'barangay' => 'Dagumbaan',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Dangcagan',
            'barangay' => 'Roxas',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Don Carlos',
            'barangay' => 'Bocboc',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Kibawe',
            'barangay' => 'Old Kibawe',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Kitaotao',
            'barangay' => 'Balangigay',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Damulog',
            'barangay' => 'Old Damulog',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Talakag',
            'barangay' => 'Liguron',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Malaybalay',
            'barangay' => 'Bancud',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Malaybalay',
            'barangay' => 'Kalasungay',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Malaybalay',
            'barangay' => 'Aglayan',
        ]);

        DB::table('locations')->insert([
            'province' => 'Bukidnon',
            'municipality' => 'Valencia City',
            'barangay' => 'Lumbo',
        ]);
    }
}
