<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->lenth(50);
            $table->string('description')->lenth(100);
            $table->integer('quantity_stock')->lenth(50);
            $table->integer('critical_quantity')->lenth(50);
            $table->float('price');
            $table->float('discounted_price');
            $table->integer('category_id')->lenth(11);
            $table->integer('supplier_id')->lenth(11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
