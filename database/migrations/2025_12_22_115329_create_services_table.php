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
     * Hizmetler tablosunu oluştur
     * Kullanım: Sunulan hizmetlerin listelenmesi için
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Hizmet başlığı
            $table->string('slug')->unique(); // SEO-friendly URL
            $table->text('short_description'); // Kısa açıklama
            $table->text('description'); // Detaylı açıklama
            $table->string('icon')->nullable(); // İkon adı veya dosya yolu
            $table->string('image')->nullable(); // Hizmet görseli
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
        Schema::dropIfExists('services');
    }
};
