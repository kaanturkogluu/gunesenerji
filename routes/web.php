<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes - Ana Sayfa ve Genel Sayfalar
|--------------------------------------------------------------------------
*/

// Ana Sayfa
Route::get('/', [HomeController::class, 'index'])->name('home');

// Kurumsal Sayfalar
Route::get('/hakkimizda', [PageController::class, 'about'])->name('about');
Route::get('/politikalar', [PageController::class, 'policies'])->name('policies');
Route::get('/belgeler', [PageController::class, 'certificates'])->name('certificates');

// Hizmetler
Route::get('/hizmetlerimiz', [ServiceController::class, 'index'])->name('services');
Route::get('/hizmetlerimiz/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Projeler
Route::get('/projelerimiz', [ProjectController::class, 'index'])->name('projects');
Route::get('/projelerimiz/{slug}', [ProjectController::class, 'show'])->name('projects.show');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// SSS - Sıkça Sorulan Sorular
Route::get('/sss', [PageController::class, 'faq'])->name('faq');

// İletişim
Route::get('/iletisim', [ContactController::class, 'index'])->name('contact');
Route::post('/iletisim', [ContactController::class, 'store'])->name('contact.store');

// PHP Info Sayfası (sadece geliştirme ortamında)
Route::get('/phpinfo', function () {
    if (config('app.debug')) {
        phpinfo();
    } else {
        abort(404);
    }
})->name('phpinfo');

/*
|--------------------------------------------------------------------------
| Admin Routes - Yönetim Paneli (Admin middleware ile korumalı)
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\ContactMessageController;

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Blog Yönetimi
    Route::resource('blogs', AdminBlogController::class);
    
    // Proje Yönetimi
    Route::resource('projects', AdminProjectController::class);
    
    // İletişim Mesajları
    Route::get('/messages', [ContactMessageController::class, 'index'])->name('messages');
    Route::post('/messages/{message}/mark-read', [ContactMessageController::class, 'markAsRead'])->name('messages.mark-read');
});

/*
|--------------------------------------------------------------------------
| Auth Routes - Kullanıcı Profili
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
