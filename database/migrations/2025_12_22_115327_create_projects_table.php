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
     * Projeler tablosunu oluştur
     * Kullanım: Tamamlanan GES/RES projelerinin gösterimi için
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Proje adı
            $table->string('slug')->unique(); // SEO-friendly URL
            $table->text('description'); // Proje açıklaması
            $table->string('location')->nullable(); // Proje lokasyonu
            $table->string('capacity')->nullable(); // Kurulu güç (örn: 5 MW)
            $table->json('images')->nullable(); // Proje görselleri (JSON array)
            $table->string('category')->default('ges'); // ges, res, biyokutle, danismanlik
            $table->date('completed_at')->nullable(); // Tamamlanma tarihi
            $table->boolean('is_featured')->default(false); // Öne çıkan proje mi?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
