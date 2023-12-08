<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('impors', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id_simulasi')->primary();
            $table->string('kode_barang', 8);
            $table->string('uraian_barang', 200);
            $table->integer('bm');
            $table->float('nilai_komoditas');
            $table->float('nilai_bm');
            $table->timestamp('waktu_insert')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impors');
    }
};
