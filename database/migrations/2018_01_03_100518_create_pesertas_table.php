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
            $table->char('nama_peserta', 50);
            $table->string('nrp', 13);
            $table->string('departemen', 50);
            $table->char('nama_pkk', 50);
            $table->string('alergi', 150);
            $table->string('riwayat_penyakit', 200);
            $table->string('no_hp', 12);
            $table->string('no_hp_ortu', 12);
            $table->string("id_line", 25);
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
