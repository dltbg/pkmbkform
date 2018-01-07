<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyNrpUnique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesertas', function (Blueprint $table){
            $table->string('nrp')->unique()->change();
        });
        Schema::table('absensis', function (Blueprint $table){
            $table->string('nrp')->unique()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesertas', function (Blueprint $table){
            $table->string('nrp')->change();
        });
        Schema::table('absensis', function (Blueprint $table){
        });
    }
}
