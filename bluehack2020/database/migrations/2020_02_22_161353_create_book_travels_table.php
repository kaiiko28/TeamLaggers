<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('vehicle_id');
            $table->string('vehicle_owner_firstname');
            $table->string('vehicle_owner_lastname');
            $table->string('owner_vehicle_id');
            $table->string('from');
            $table->string('to');
            $table->datetime('date');
            $table->string('time');
            $table->string('request')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('book_travels');
    }
}
