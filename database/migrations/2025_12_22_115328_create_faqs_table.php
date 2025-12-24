<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Sıkça Sorulan Sorular tablosunu oluştur
     * Kullanım: SSS sayfası için
     */
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question'); // Soru
            $table->text('answer'); // Cevap
            $table->string('category')->nullable(); // Kategori (ges, res, genel, vb.)
            $table->integer('order')->default(0); // Sıralama
            $table->boolean('is_active')->default(true); // Aktif mi?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
