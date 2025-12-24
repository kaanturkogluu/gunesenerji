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
     * Blog yazıları tablosunu oluştur
     * Kullanım: Blog içeriği yönetimi için
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Blog başlığı
            $table->string('slug')->unique(); // SEO-friendly URL
            $table->text('content'); // Blog içeriği
            $table->text('excerpt')->nullable(); // Kısa özet
            $table->string('featured_image')->nullable(); // Ana görsel
            $table->boolean('is_published')->default(false); // Yayında mı?
            $table->timestamp('published_at')->nullable(); // Yayın tarihi
            $table->integer('views')->default(0); // Görüntülenme sayısı
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
