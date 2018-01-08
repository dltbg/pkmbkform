<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlusEmailAndOther extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('pesertas', function (Blueprint $table) {
                $table->string('email')->after('nrp');
            });
         Schema::table('absensis', function (Blueprint $table) {
                $table->tinyInteger('berangkat')->after('nrp');
                $table->tinyInteger('pulang')->after('bus_pulang');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('pesertas', function (Blueprint $table) {

            });
     Schema::table('absensis', function (Blueprint $table) {

            }); 
    }
}
