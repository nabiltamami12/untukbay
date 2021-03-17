<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_peminjamen', function (Blueprint $table) {
             $table->increments('id'); 
           $table->date('tanggal');
            $table->string('tim');         
        $table->integer('id_material')->unsigned();
       $table->integer('jumlah');
       $table->string('status'); 
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
        Schema::dropIfExists('laporan_peminjamen');
    }
}
