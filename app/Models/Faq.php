<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * SSS (Sıkça Sorulan Sorular) Modeli
 * Kullanım: SSS içeriğini yönetmek için
 * Örnek: Faq::active()->ordered()->get();
 */
class Faq extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'category',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Aktif SSS'leri getir
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
