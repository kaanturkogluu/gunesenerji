@extends('layouts.frontend')

@section('title', $service->title . ' - UKPower')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="text-6xl mb-4">
                <i class="fas fa-{{ $service->icon ?? 'solar-panel' }}"></i>
            </div>
            <h1 class="text-4xl font-bold mb-4">{{ $service->title }}</h1>
            <p class="text-xl">{{ $service->short_description }}</p>
        </div>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            {{-- Breadcrumb --}}
            <div class="mb-6 text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-primary">Ana Sayfa</a>
                <span class="mx-2">/</span>
                <a href="{{ route('services') }}" class="hover:text-primary">Hizmetlerimiz</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900">{{ $service->title }}</span>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="prose max-w-none">
                    {!! nl2br(e($service->description)) !!}
                </div>
                
                <div class="mt-8 pt-8 border-t">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Neden UKPower?</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-2xl text-primary mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Uzman Kadro</h4>
                                <p class="text-gray-600">15+ yıl tecrübeli mühendisler</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-2xl text-primary mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Kalite Garantisi</h4>
                                <p class="text-gray-600">ISO sertifikalı hizmet</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-2xl text-primary mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">7/24 Destek</h4>
                                <p class="text-gray-600">Kesintisiz teknik destek</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-2xl text-primary mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Uygun Fiyat</h4>
                                <p class="text-gray-600">Ekonomik çözümler</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 bg-primary text-white rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-bold mb-4">Bu hizmet hakkında bilgi almak ister misiniz?</h3>
                    <a href="{{ route('contact') }}" class="bg-white text-primary px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-block">
                        <i class="fas fa-envelope mr-2"></i> İletişime Geçin
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

