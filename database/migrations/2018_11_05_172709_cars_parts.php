<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarsParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_parts', function (Blueprint $table) {
            $table->increments('car_part_id');
            $table->unsignedInteger('car_id');
            $table->foreign('car_id')->references('car_id')->on('cars');
            $table->unsignedInteger('part_id');
            $table->foreign('part_id')->references('part_id')->on('parts');
            $table->integer('price');
            $table->integer('stock');

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
        Schema::dropIfExists('cars_parts');
    }
}
