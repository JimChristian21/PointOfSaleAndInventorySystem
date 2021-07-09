<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            'trans_id' => 1,
            'product_id' => 1,
            'order_qty' => 1,
            'price' => 15,
            'amount' => 15,
            'order_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('order_details')->insert([
            'trans_id' => 2,
            'product_id' => 1,
            'order_qty' => 1,
            'price' => 15,
            'amount' => 15,
            'order_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('order_details')->insert([
            'trans_id' => 3,
            'product_id' => 1,
            'order_qty' => 1,
            'price' => 15,
            'amount' => 15,
            'order_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('order_details')->insert([
            'trans_id' => 4,
            'product_id' => 1,
            'order_qty' => 1,
            'price' => 15,
            'amount' => 15,
            'order_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('order_details')->insert([
            'trans_id' => 5,
            'product_id' => 1,
            'order_qty' => 1,
            'price' => 15,
            'amount' => 15,
            'order_date' => date('Y-m-d H:i:s'),
        ]);
    }
}
