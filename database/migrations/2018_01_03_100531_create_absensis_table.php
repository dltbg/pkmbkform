<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('bus_berangkat');
            $table->tinyInteger('opening');
            $table->tinyInteger('sesi_1');
            $table->tinyInteger('sesi_2');
            $table->tinyInteger('sesi_3');
            $table->tinyInteger('sesi_4');
            $table->tinyInteger('sesi_5');
            $table->tinyInteger('sesi_6');
            $table->tinyInteger('sesi_7');
            $table->tinyInteger('closing'); 
            $table->tinyInteger('bus_pulang');
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
        Schema::dropIfExists('absensis');
    }
}