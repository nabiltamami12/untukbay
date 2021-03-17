<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('trafos');
        
        Schema::create('trafos', function (Blueprint $table) {
           $table->increments('id');          
        $table->string('kode_trafo');
        $table->integer('id_material')->unsigned();
            $table->string('alamat');
            $table->string('seksen');
            $table->string('deskripsi');
            $table->string('gambar');
            // $table->string('status');
            $table->date('tanggal_pemasangan');
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
        Schema::dropIfExists('trafos');
    }
}
