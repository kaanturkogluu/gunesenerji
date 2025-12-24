<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * İletişim Controller
 */
class ContactController extends Controller
{
    /**
     * İletişim sayfası
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * İletişim formu gönderme
     */
    public function store(Request $request)
    {
        // Form doğrulama
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'message.required' => 'Mesaj alanı zorunludur.',
        ]);

        // Mesajı veritabanına kaydet
        ContactMessage::create($validated);

        // Email gönder (Admin'e bildirim)
        // NOT: .env dosyasında mail ayarlarını yapmanız gerekiyor
        // MAIL_MAILER=smtp, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD
        try {
            Mail::to(env('ADMIN_EMAIL', 'admin@ukpower.com'))
                ->send(new \App\Mail\ContactMessageMail($validated));
        } catch (\Exception $e) {
            // Email gönderimi başarısız olsa bile form mesajı kaydedildi
            logger()->error('Email gönderimi hatası: ' . $e->getMessage());
        }

        return back()->with('success', 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.');
    }
}
