<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

/**
 * Admin Contact Messages Controller
 */
class ContactMessageController extends Controller
{
    /**
     * Mesajları listele
     */
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(20);
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Mesajı okundu olarak işaretle
     */
    public function markAsRead(ContactMessage $message)
    {
        $message->update(['is_read' => true]);
        return back()->with('success', 'Mesaj okundu olarak işaretlendi.');
    }
}
