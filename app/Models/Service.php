<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Hizmet Modeli
 * Kullanım: Sunulan hizmetleri yönetmek için
 * Örnek: Service::active()->ordered()->get();
 */
class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'icon',
        'image',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Aktif hizmetleri getir
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Sıralamaya göre getir
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
