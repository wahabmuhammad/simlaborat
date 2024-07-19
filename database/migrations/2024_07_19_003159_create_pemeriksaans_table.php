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
        Schema::create('pemeriksaan_t', function (Blueprint $table) {
            $table->id();
            $table->boolean('statusenabled')->default(true);
            $table->integer('noreg_fk');
            $table->integer('norm_fk');
            $table->integer('produk_fk');
            $table->timestamp('tgl_pemeriksaan');
            $table->string('pengirim');
            $table->integer('user_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_t');
    }
};
