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
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->string('namapelatihan');
            $table->text('deskripsipelatihan');
            $table->date('mulaipelatihan');
            $table->date('selesaipelatihan');
            $table->string('tempatpelatihan');
            $table->enum('status', ['setuju', 'tidaksetuju'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihans');
    }
};
