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
        Schema::create('study_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('judul_materi');                       
            $table->string('youtube_url');                 
            $table->string('materi_image')->nullable();  
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->text('paragraph3');
            $table->text('paragraph4');
            $table->string('ilustrasi_materi_image')->nullable();  // Main material image
            $table->string('ilustrasi_materi_image2')->nullable();  // Main material image
            $table->text('kesimpulan')->nullable();        // Conclusion text
            $table->timestamps();                          // Timestamps for created and updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_materials');
    }
};
