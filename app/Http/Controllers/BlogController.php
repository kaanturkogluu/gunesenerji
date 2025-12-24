<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

/**
 * Blog Controller
 */
class BlogController extends Controller
{
    /**
     * Blog listesi
     */
    public function index()
    {
        $blogs = BlogPost::published()->latest()->paginate(9);
        $popularBlogs = BlogPost::published()->popular(5)->get();
        
        return view('blog.index', compact('blogs', 'popularBlogs'));
    }

    /**
     * Blog detay - Görüntülenme sayısını artır
     */
    public function show($slug)
    {
        $blog = BlogPost::where('slug', $slug)
                       ->where('is_published', true)
                       ->firstOrFail();
        
        // Görüntülenme sayısını artır
        $blog->increment('views');
        
        // İlgili yazılar
        $relatedBlogs = BlogPost::published()
                               ->where('id', '!=', $blog->id)
                               ->latest()
                               ->take(3)
                               ->get();
        
        return view('blog.show', compact('blog', 'relatedBlogs'));
    }
}
