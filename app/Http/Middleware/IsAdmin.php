<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Admin Kontrol Middleware
 * Kullanım: Admin paneline erişimi kontrol eder
 * Route::middleware(['auth', 'admin'])->group(function () { ... });
 */
class IsAdmin
{
    /**
     * Admin kontrolü yap
     * Kullanıcı admin değilse ana sayfaya yönlendir
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kullanıcı giriş yapmış mı ve admin mi kontrol et
        if (!auth()->check() || !auth()->user()->is_admin) {
            return redirect('/')->with('error', 'Bu sayfaya erişim yetkiniz bulunmamaktadır.');
        }

        return $next($request);
    }
}
