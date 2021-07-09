<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Young\'s Town',
            'description' => 'Sardines',
            'quantity_stock' => 100,
            'critical_quantity' => 50,
            'price' => 20,
            'discounted_price' => 5,
            'category_id' => 1 ,
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Shovel',
            'description' => 'Shovel ',
            'quantity_stock' => 50,
            'critical_quantity' => 10,
            'price' => 250,
            'discounted_price' => 30,
            'category_id' => 2 ,
            'supplier_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Safeguard',
            'description' => 'Home Equipments',
            'quantity_stock' => 100,
            'critical_quantity' => 50,
            'price' => 36,
            'discounted_price' => 510,
            'category_id' => 3 ,
            'supplier_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Loaf Bread',
            'description' => 'Bread',
            'quantity_stock' => 30,
            'critical_quantity' => 10,
            'price' => 25,
            'discounted_price' => 3,
            'category_id' => 1 ,
            'supplier_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Tide Soap',
            'description' => 'Clothes Soap',
            'quantity_stock' => 100,
            'critical_quantity' => 20,
            'price' => 8,
            'discounted_price' => 2,
            'category_id' => 3 ,
            'supplier_id' => 5,
        ]);

        
    }
}
