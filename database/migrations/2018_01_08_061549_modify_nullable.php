<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('pesertas', function (Blueprint $table){
            $table->string('nama_pkk')->nullable()->change();
            $table->string('alergi')->nullable()->change();
            $table->string('penyakit')->nullable()->change();
            $table->string('line')->nullable()->change();
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
            $table->string('nama_pkk')->change();
            $table->string('alergi')->change();
            $table->string('penyakit')->change();
            $table->string('line')->change();
        });
    }
}
