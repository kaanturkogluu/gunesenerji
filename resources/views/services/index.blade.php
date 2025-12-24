@extends('layouts.frontend')

@section('title', 'Hizmetlerimiz - UKPower')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Hizmetlerimiz</h1>
        <p class="text-xl">Yenilenebilir enerji alanında profesyonel çözümler</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($services as $service)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                <div class="p-8">
                    <div class="text-5xl text-primary mb-4">
                        <i class="fas fa-{{ $service->icon ?? 'solar-panel' }}"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $service->title }}</h3>
                    <p class="text-gray-600 mb-6">{{ $service->short_description }}</p>
                    <a href="{{ route('services.show', $service->slug) }}" class="bg-primary text-white px-6 py-3 rounded-full hover:bg-blue-700 transition inline-block">
                        Detaylı Bilgi <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

