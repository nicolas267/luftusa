<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('car_id');
             $table->unsignedInteger('car_model_id');
            $table->foreign('car_model_id')->references('car_model_id')->on('car_models');
            $table->unsignedInteger('car_version_id');
            $table->foreign('car_version_id')->references('car_versions_id')->on('car_versions');
            $table->unsignedInteger('car_year_id');
            $table->foreign('car_year_id')->references('car_years_id')->on('car_years');
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
        Schema::dropIfExists('cars');
    }
}
