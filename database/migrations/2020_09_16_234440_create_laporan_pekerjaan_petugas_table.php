<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPekerjaanPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pekerjaan_petugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_pk');
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->string('fotoSebelum');
            $table->string('fotoSesudah');

            // $table->integer('price');
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
        Schema::dropIfExists('laporan_pekerjaan_petugas');
    }
}
