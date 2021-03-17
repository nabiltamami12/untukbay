<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemadamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemadamen', function (Blueprint $table) {
            $table->increments('id');  
            $table->date('jadwal_padam');
            $table->string('nomor_pk');
            $table->integer('id_trafo')->unsigned();
            $table->time('awal_padam');
            $table->time('akhir_padam');
            $table->string('penyulang');
            $table->string('nama_petugas');
            $table->string('tim');
            $table->string('deskripsi_pekerjaan');
            $table->string('status');
            $table->string('unit_kerja');   
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('pemadamen');
    }
}
