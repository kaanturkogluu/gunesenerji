<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Project;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

/**
 * Admin Dashboard Controller
 * Kullanım: Admin paneli ana sayfa ve istatistikler
 */
class DashboardController extends Controller
{
    /**
     * Admin dashboard
     */
    public function index()
    {
        // İstatistikler
        $stats = [
            'blogs' => BlogPost::count(),
            'published_blogs' => BlogPost::where('is_published', true)->count(),
            'projects' => Project::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
        ];
        
        // Son mesajlar
        $recentMessages = ContactMessage::latest()->take(5)->get();
        
        // Son blog yazıları
        $recentBlogs = BlogPost::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recentMessages', 'recentBlogs'));
    }
}
