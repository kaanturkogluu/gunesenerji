<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * İletişim Mesajı Modeli
 * Kullanım: İletişim formundan gelen mesajları yönetmek için
 * Örnek: ContactMessage::unread()->latest()->get();
 */
class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'is_read',
        'is_replied',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'is_replied' => 'boolean',
    ];

    /**
     * Okunmamış mesajları getir
     */
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    /**
     * Yanıtlanmamış mesajları getir
     */
    public function scopeUnreplied($query)
    {
        return $query->where('is_replied', false);
    }
}
