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
     * Site ayarları tablosunu oluştur
     * Kullanım: Site geneli ayarlar (logo, iletişim bilgileri, sosyal medya, vb.)
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Ayar anahtarı (örn: site_title, phone, email)
            $table->text('value')->nullable(); // Ayar değeri
            $table->string('type')->default('text'); // Veri tipi (text, image, json, vb.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
