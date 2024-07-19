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
        Schema::create('jenisproduk_m', function (Blueprint $table) {
            $table->id();
            $table->boolean('statusenabled')->default(true);
            $table->string('namajenis');
            $table->integer('kelompokproduk_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenisproduk_m');
    }
};
