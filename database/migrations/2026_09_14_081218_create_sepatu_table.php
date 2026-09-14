<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function database(): void // atau public function up(): void tergantung versi Laravel-mu
{
    Schema::create('sepatu', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('merk');
        $table->decimal('harga', 10, 2); // Menggunakan decimal untuk harga agar rapi (misal: 500000.00)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepatu');
    }
};
