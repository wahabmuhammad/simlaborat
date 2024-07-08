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
        Schema::create('pasienDaftar_t', function (Blueprint $table) {
            $table->integer('noreg')->primary();
            $table->boolean('statusenabled')->default(true);
            $table->integer('norm_fk');
            $table->date('tgl_masuk');
            $table->date('tgl_pulang');
            $table->string('jenis_penjamin');
            $table->integer('user_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasienDaftar_t');
    }
};
