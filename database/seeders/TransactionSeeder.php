<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_details')->insert([
            'cust_id' => 1,
            'user_id' => 1,
            'payment' => 500,
            'change' => 485,
            'amount_paid' => 15,
            'trans_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('transaction_details')->insert([
            'cust_id' => 2,
            'user_id' => 2,
            'payment' => 500,
            'change' => 485,
            'amount_paid' => 15,
            'trans_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('transaction_details')->insert([
            'cust_id' => 3,
            'user_id' => 3,
            'payment' => 500,
            'change' => 485,
            'amount_paid' => 15,
            'trans_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('transaction_details')->insert([
            'cust_id' => 4,
            'user_id' => 4,
            'payment' => 500,
            'change' => 485,
            'amount_paid' => 15,
            'trans_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('transaction_details')->insert([
            'cust_id' => 5,
            'user_id' => 5,
            'payment' => 500,
            'change' => 485,
            'amount_paid' => 15,
            'trans_date' => date('Y-m-d H:i:s'),
        ]);
    }
}
