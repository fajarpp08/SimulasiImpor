<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulasisTable extends Migration
{
    public function up()
    {
        Schema::create('simulasis', function (Blueprint $table) {
            $table->uuid('id_simulasi')->primary(); // Gunakan UUID sebagai primary key
            $table->string('kode_barang', 8);
            $table->string('uraian_barang', 200)->nullable();
            $table->integer('bm')->nullable();
            $table->float('nilai_komoditas');
            $table->float('nilai_bm');
            $table->timestamps(); // Waktu insert otomatis
        });
    }

    public function down()
    {
        Schema::dropIfExists('simulasis');
    }
}
