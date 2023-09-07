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
        Schema::create('hargas', function (Blueprint $table) {
            $table->id();
            $table->integer('harga');
            $table->foreignId('namatoko')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('menu')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('varian')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('jenismakanan')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hargas');
    }
};