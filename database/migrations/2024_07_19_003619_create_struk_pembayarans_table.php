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
        Schema::create('strukpembayaran_t', function (Blueprint $table) {
            $table->id();
            $table->integer('noreg_fk');
            $table->integer('pemeriksaan_fk');
            $table->string('namaproduk');
            $table->float('jumlahtagihan');
            $table->float('totalbayar');
            $table->integer('jenispembayaran_fk');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strukpembayaran_t');
    }
};
