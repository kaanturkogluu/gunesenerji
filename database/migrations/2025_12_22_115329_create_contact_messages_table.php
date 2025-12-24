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
     * İletişim mesajları tablosunu oluştur
     * Kullanım: İletişim formundan gelen mesajları saklamak için
     */
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ad Soyad
            $table->string('email'); // E-posta
            $table->string('phone')->nullable(); // Telefon
            $table->string('subject')->nullable(); // Konu
            $table->text('message'); // Mesaj
            $table->boolean('is_read')->default(false); // Okundu mu?
            $table->boolean('is_replied')->default(false); // Yanıtlandı mı?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
