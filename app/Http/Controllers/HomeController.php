<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\BlogPost;
use Illuminate\Http\Request;

/**
 * Ana Sayfa Controller
 * Kullanım: Ana sayfa için veri hazırlama ve gösterme
 */
class HomeController extends Controller
{
    /**
     * Ana sayfayı göster
     * Kullanım: Route::get('/', [HomeController::class, 'index'])->name('home');
     */
    public function index()
    {
        // Aktif hizmetleri getir (sıralı)
        $services = Service::active()->ordered()->take(4)->get();
        
        // Öne çıkan projeleri getir
        $projects = Project::featured()->latest()->take(3)->get();
        
        // En son blog yazılarını getir
        $blogs = BlogPost::published()->latest()->take(3)->get();
        
        return view('home', compact('services', 'projects', 'blogs'));
    }
}
