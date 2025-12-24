<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

/**
 * Hizmetler Controller
 * Kullanım: Hizmetler sayfası
 */
class ServiceController extends Controller
{
    /**
     * Hizmetler listesi
     */
    public function index()
    {
        $services = Service::active()->ordered()->get();
        return view('services.index', compact('services'));
    }

    /**
     * Hizmet detay sayfası
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('services.show', compact('service'));
    }
}
