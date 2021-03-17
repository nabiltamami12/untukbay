<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('materials');
        Schema::create('materials', function (Blueprint $table) {
         $table->increments('id');
       // $table->string('id_material');
       // $table->integer('id_trafo')->unsigned();
       $table->string('kelompok_material');
       $table->string('nama_material');
       $table->integer('stok'); 
       $table->string('seksen');
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
        Schema::dropIfExists('materials');
    }
}
