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
        Schema::create('parameterlab_t', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('produk_fk');
            $table->float('nilainormal');
            $table->float('nilaimin');
            $table->float('nilaimax');
            $table->string('satuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameterlab_t');
    }
};
