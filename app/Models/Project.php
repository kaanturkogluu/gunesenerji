<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Proje Modeli
 * Kullanım: Tamamlanan projeleri yönetmek için
 * Örnek: Project::where('category', 'ges')->featured()->get();
 */
class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'location',
        'capacity',
        'images',
        'category',
        'completed_at',
        'is_featured',
    ];

    protected $casts = [
        'images' => 'array', // JSON olarak saklanan görseller
        'completed_at' => 'date',
        'is_featured' => 'boolean',
    ];

    /**
     * Öne çıkan projeleri getir
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Kategoriye göre filtrele
     * @param string $category ges, res, biyokutle, danismanlik
     */
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
