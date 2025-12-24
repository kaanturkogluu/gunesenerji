<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

/**
 * Sayfa Controller - Statik sayfalar için
 */
class PageController extends Controller
{
    /**
     * Hakkımızda sayfası
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Firma Politikaları
     */
    public function policies()
    {
        return view('pages.policies');
    }

    /**
     * Kalite Belgeleri
     */
    public function certificates()
    {
        return view('pages.certificates');
    }

    /**
     * SSS - Sıkça Sorulan Sorular
     */
    public function faq()
    {
        $faqs = Faq::active()->ordered()->get()->groupBy('category');
        return view('pages.faq', compact('faqs'));
    }
}
