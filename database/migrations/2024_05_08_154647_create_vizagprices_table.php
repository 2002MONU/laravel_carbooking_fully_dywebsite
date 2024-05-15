<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVizagpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vizagprices', function (Blueprint $table) {
            $table->id();
            $table->string('cartype');
            $table->string('acprice');
            $table->string('price');
            $table->string('fueltype');
            $table->string('seats');
            $table->string('extrakm');
            $table->foreignId('city_id');
            $table->string('image');
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
        Schema::dropIfExists('vizagprices');
    }
}
