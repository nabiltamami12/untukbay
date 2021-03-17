<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerintahKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perintah__kerjas', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->date('tanggal_pk');
            $table->string('nomor_pk');
            $table->string('nama_petugas');
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
        Schema::dropIfExists('perintah__kerjas');
    }
}
