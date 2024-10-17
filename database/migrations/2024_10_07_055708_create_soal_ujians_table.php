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
        Schema::create('soal_ujians', function (Blueprint $table) {
        $table->id();
        $table->string('pertanyaan');
        $table->string('pilihan_a');
        $table->string('pilihan_b');
        $table->string('pilihan_c');
        $table->string('pilihan_d');
        $table->string('jawaban_benar');
        $table->string('gambar')->nullable();
        $table->unsignedBigInteger('kategori_id');
        $table->foreign('kategori_id')->references('id')->on('kategori_soals')->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_ujians');
    }
};
