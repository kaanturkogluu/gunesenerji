@extends('layouts.frontend')

@section('title', 'UKPower - Güneş Enerjisi Çözümleri')

@section('content')
{{-- Hero Section - Ersisenerji tarzında --}}
<section class="hero-gradient text-white py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Güneş Enerjisiyle Geleceği Aydınlatıyoruz
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-100">
                Yenilenebilir enerji çözümleri ile hem çevreyi koruyun hem de enerji maliyetlerinizi düşürün.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}" class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition inline-block text-center">
                    <i class="fas fa-envelope mr-2"></i> Hemen Teklif Alın
                </a>
                <a href="{{ route('projects') }}" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary transition inline-block text-center">
                    <i class="fas fa-folder-open mr-2"></i> Projelerimizi İnceleyin
                </a>
            </div>
        </div>
    </div>
</section>

{{-- İstatistikler --}}
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div class="hover-scale">
                <div class="text-4xl font-bold text-primary mb-2">15+</div>
                <div class="text-gray-600">Yıllık Tecrübe</div>
            </div>
            <div class="hover-scale">
                <div class="text-4xl font-bold text-primary mb-2">500+</div>
                <div class="text-gray-600">Tamamlanan Proje</div>
            </div>
            <div class="hover-scale">
                <div class="text-4xl font-bold text-primary mb-2">100+</div>
                <div class="text-gray-600">MW Kurulu Güç</div>
            </div>
            <div class="hover-scale">
                <div class="text-4xl font-bold text-primary mb-2">%98</div>
                <div class="text-gray-600">Müşteri Memnuniyeti</div>
            </div>
        </div>
    </div>
</section>

{{-- Hizmetlerimiz --}}
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hizmetlerimiz</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Güneş enerjisi sistemleri kurulumundan bakımına kadar tüm ihtiyaçlarınız için profesyonel hizmet
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $service)
            <div class="bg-white p-6 rounded-lg shadow-md hover-scale">
                <div class="text-4xl text-primary mb-4">
                    <i class="fas fa-{{ $service->icon ?? 'solar-panel' }}"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service->title }}</h3>
                <p class="text-gray-600 mb-4">{{ Str::limit($service->short_description, 100) }}</p>
                <a href="{{ route('services.show', $service->slug) }}" class="text-primary font-semibold hover:underline">
                    Detaylı Bilgi <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('services') }}" class="bg-primary text-white px-8 py-3 rounded-full hover:bg-blue-700 transition inline-block">
                Tüm Hizmetlerimiz
            </a>
        </div>
    </div>
</section>

{{-- Hakkımızda Özet --}}
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Karbon Ayak İzini Azaltan Ekonomik Çözümler
                </h2>
                <p class="text-gray-600 mb-4">
                    UKPower olarak, 15+ yıllık uzman kadromuzla enerji santrali projeleri alanında danışmanlık, 
                    mühendislik, proje geliştirme ve denetim konularında hizmet vermekteyiz.
                </p>
                <p class="text-gray-600 mb-6">
                    Güneş Enerjisi Santralleri (GES) ve Rüzgar Santralleri (RES) kurulumlarında anahtar teslim 
                    projeler sunarak ülkemizin enerjisine değer katıyoruz.
                </p>
                <a href="{{ route('about') }}" class="bg-primary text-white px-8 py-3 rounded-full hover:bg-blue-700 transition inline-block">
                    Hakkımızda Daha Fazla
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-award text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-gray-900 mb-2">Uluslararası Kalite</h4>
                    <p class="text-sm text-gray-600">ISO sertifikalı çalışma standartları</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-users text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-gray-900 mb-2">Uzman Kadro</h4>
                    <p class="text-sm text-gray-600">15+ yıl tecrübeli mühendisler</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-leaf text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-gray-900 mb-2">Çevre Dostu</h4>
                    <p class="text-sm text-gray-600">%100 yenilenebilir enerji</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <i class="fas fa-tools text-4xl text-primary mb-3"></i>
                    <h4 class="font-semibold text-gray-900 mb-2">Bakım Desteği</h4>
                    <p class="text-sm text-gray-600">7/24 teknik destek hizmeti</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Projelerimiz --}}
@if($projects->count() > 0)
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Öne Çıkan Projelerimiz</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Türkiye'nin dört bir yanında gerçekleştirdiğimiz başarılı projeler
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-green-400"></div>
                <div class="p-6">
                    <div class="text-sm text-primary font-semibold mb-2">
                        <i class="fas fa-bolt mr-1"></i> {{ $project->capacity ?? 'N/A' }}
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        <i class="fas fa-map-marker-alt mr-1"></i> {{ $project->location }}
                    </p>
                    <a href="{{ route('projects.show', $project->slug) }}" class="text-primary font-semibold hover:underline">
                        Detayları Görüntüle <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('projects') }}" class="bg-primary text-white px-8 py-3 rounded-full hover:bg-blue-700 transition inline-block">
                Tüm Projeler
            </a>
        </div>
    </div>
</section>
@endif

{{-- Blog --}}
@if($blogs->count() > 0)
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Son Yazılar</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Güneş enerjisi ve yenilenebilir enerji hakkında güncel bilgiler
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($blogs as $blog)
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-400"></div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-2">
                        <i class="far fa-calendar mr-1"></i> {{ $blog->published_at->format('d.m.Y') }}
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $blog->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($blog->excerpt, 100) }}</p>
                    <a href="{{ route('blog.show', $blog->slug) }}" class="text-primary font-semibold hover:underline">
                        Devamını Oku <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('blog') }}" class="bg-primary text-white px-8 py-3 rounded-full hover:bg-blue-700 transition inline-block">
                Tüm Yazılar
            </a>
        </div>
    </div>
</section>
@endif

{{-- CTA Section --}}
<section class="hero-gradient text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Güneş Enerjisiyle Tasarruf Etmeye Hazır mısınız?</h2>
        <p class="text-xl mb-8 text-gray-100">Ücretsiz keşif ve teklif için hemen iletişime geçin</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition inline-block">
                <i class="fas fa-phone mr-2"></i> Bizi Arayın
            </a>
            <a href="{{ route('faq') }}" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary transition inline-block">
                <i class="fas fa-question-circle mr-2"></i> SSS
            </a>
        </div>
    </div>
</section>
@endsection

