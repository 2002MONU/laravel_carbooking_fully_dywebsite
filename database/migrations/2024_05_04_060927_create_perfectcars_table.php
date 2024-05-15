<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfectcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfectcars', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('pickupdate');
            $table->string('pickuptime');
            $table->string('package');
            $table->string('cartype');
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
        Schema::dropIfExists('perfectcars');
    }
}
