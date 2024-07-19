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
        Schema::create('hasillaborat_t', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tgl_pemeriksaan');
            $table->integer('noreg_fk');
            $table->string('hasil');
            $table->string('detailpemeriksaan');
            $table->string('metode');
            $table->integer('pemeriksaan_fk');
            $table->integer('user_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_laborats');
    }
};
