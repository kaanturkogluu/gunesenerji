<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Blog Yazısı Modeli
 * Kullanım: Blog yazılarını veritabanından çekmek ve yönetmek için
 * Örnek: BlogPost::where('is_published', true)->latest()->get();
 */
class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'featured_image',
        'is_published',
        'published_at',
        'views',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'views' => 'integer',
    ];

    /**
     * Yayında olan blog yazılarını getir
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    /**
     * En çok okunan blog yazılarını getir
     */
    public function scopePopular($query, $limit = 5)
    {
        return $query->orderBy('views', 'desc')->limit($limit);
    }
}
