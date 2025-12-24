<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * İletişim Formu Mail Sınıfı
 * Kullanım: Mail::to('admin@ukpower.com')->send(new ContactMessageMail($data));
 */
class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Mail instance oluştur
     * @param array $data Form verileri (name, email, phone, subject, message)
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Mail başlığı
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Yeni İletişim Formu Mesajı - UKPower',
        );
    }

    /**
     * Mail içeriği
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message',
        );
    }

    /**
     * Mail ekleri
     */
    public function attachments(): array
    {
        return [];
    }
}
