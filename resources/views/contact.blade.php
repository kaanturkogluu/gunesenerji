@extends('layouts.frontend')

@section('title', 'İletişim - UKPower')

@section('content')
{{-- Page Header --}}
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">İletişim</h1>
        <p class="text-xl">Bizimle iletişime geçin, size yardımcı olalım</p>
    </div>
</section>

{{-- Contact Content --}}
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- İletişim Formu --}}
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Mesaj Gönderin</h2>
                
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Ad Soyad *</label>
                        <input type="text" name="name" value="{{ old('name') }}" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                               required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">E-posta *</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                               required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Telefon</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Konu</label>
                        <input type="text" name="subject" value="{{ old('subject') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        @error('subject')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Mesajınız *</label>
                        <textarea name="message" rows="6"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <button type="submit" class="bg-primary text-white px-8 py-3 rounded-full hover:bg-blue-700 transition w-full md:w-auto">
                        <i class="fas fa-paper-plane mr-2"></i> Gönder
                    </button>
                </form>
            </div>
            
            {{-- İletişim Bilgileri --}}
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">İletişim Bilgileri</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900 mb-1">Adres</h3>
                            <p class="text-gray-600">Ankara, Türkiye</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900 mb-1">Telefon</h3>
                            <a href="tel:+905367722902" class="text-gray-600 hover:text-primary">
                                +90 536 772 29 02
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900 mb-1">E-posta</h3>
                            <a href="mailto:info@ukpower.com" class="text-gray-600 hover:text-primary">
                                info@ukpower.com
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900 mb-1">Çalışma Saatleri</h3>
                            <p class="text-gray-600">Pazartesi - Cuma: 09:00 - 18:00</p>
                            <p class="text-gray-600">Cumartesi - Pazar: Kapalı</p>
                        </div>
                    </div>
                </div>
                
                {{-- Sosyal Medya --}}
                <div class="mt-8">
                    <h3 class="font-semibold text-gray-900 mb-4">Sosyal Medya</h3>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

