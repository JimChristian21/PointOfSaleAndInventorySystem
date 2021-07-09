<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id('manager_id');
            $table->string('first_name')->length(50);
            $table->string('last_name')->length(50);
            $table->integer('location_id')->length(11);
            $table->string('email')->length(50);
            $table->string('phone_number')->length(12);
            $table->date('started_date');
            $table->date('ended_date');
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
        Schema::dropIfExists('managers');
    }
}
