<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->char('nama', 50);
            $table->string('nrp', 14)->unique();
            $table->string('email', 255);
            $table->string('departemen', 50);
            $table->char('posisi');
            $table->char('nama_pkk', 50)->nullable();
            $table->string('alergi', 150)->nullable();
            $table->string('penyakit', 200)->nullable();
            $table->string('hp', 12);
            $table->string('hp_ortu', 12);
            $table->string('line', 25)->nullable();
            $table->binary('bukti_transfer');
            $table->tinyInteger('konfirmasi');
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
        Schema::dropIfExists('pesertas');
    }
}
