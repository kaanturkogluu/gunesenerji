<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Site Ayarları Modeli
 * Kullanım: Site geneli ayarları yönetmek için
 * Örnek: Setting::where('key', 'site_phone')->first()->value;
 * Helper: setting('site_phone') // Helper fonksiyon ile kullanılabilir
 */
class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'type',
    ];

    /**
     * Ayar değerini getir
     * @param string $key Ayar anahtarı
     * @param mixed $default Varsayılan değer
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Ayar değerini kaydet veya güncelle
     * @param string $key Ayar anahtarı
     * @param mixed $value Ayar değeri
     * @param string $type Ayar tipi
     */
    public static function set($key, $value, $type = 'text')
    {
        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type]
        );
    }
}
