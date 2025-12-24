@extends('layouts.frontend')

@section('title', 'Hakkımızda - UKPower')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Hakkımızda</h1>
        <p class="text-xl">Karbon ayak izini azaltan kaliteli ve ekonomik çözümler sunuyoruz</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">15+ Yıllık Uzman Kadro</h2>
                
                <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                    UKPower, 2014 yılı başında enerji santrali projeleri alanında danışmanlık, mühendislik, proje geliştirme, 
                    proje yönetimi ve denetim konularında faaliyet göstermeye başlamıştır. Genç ve dinamik yapısıyla öne çıkan 
                    şirketimiz, uluslararası tecrübeye sahip kurucu ve yöneticileriyle fark yaratmakta, teknik bilgi seviyesi 
                    yüksek çalışma arkadaşlarımız ise kaliteye büyük önem vermektedir.
                </p>
                
                <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                    Edindiğimiz deneyimi, anahtar teslim Güneş Enerjisi Santrali (GES) projelerine de yansıtarak ülkemizin 
                    enerjisine değer katıyoruz. Mevzuat uzmanlığımız, mühendislik tasarımlarımız ve gerekli tüm kamu kurum 
                    izinlerinin alınması süreçlerinin yanı sıra, işletme, bakım ve raporlama hizmetlerini de anahtar teslim 
                    GES projeleri kapsamında sunmaktayız.
                </p>
                
                <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                    Ayrıca, RES'ler için montaj ve işletme&bakım hizmetleri veriyoruz. Tüm işlerimizde; İSG, kalite ve proje 
                    yönetim kurallarını özenle uyguluyoruz.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-primary mb-3"><i class="fas fa-bullseye mr-2"></i>Misyonumuz</h3>
                        <p class="text-gray-600">
                            Yenilenebilir enerji kaynaklarını en verimli şekilde kullanarak, çevre dostu ve sürdürülebilir 
                            enerji çözümleri sunmak.
                        </p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-primary mb-3"><i class="fas fa-eye mr-2"></i>Vizyonumuz</h3>
                        <p class="text-gray-600">
                            Türkiye'nin en güvenilir yenilenebilir enerji çözüm ortağı olmak ve karbon ayak izini azaltmada 
                            öncü rol oynamak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Neden Biz?</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Uluslararası Kalite</h3>
                <p class="text-gray-600">ISO sertifikalı çalışma standartları</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Uzman Kadro</h3>
                <p class="text-gray-600">15+ yıl tecrübeli mühendisler</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Çevre Dostu</h3>
                <p class="text-gray-600">%100 yenilenebilir enerji</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">7/24 Destek</h3>
                <p class="text-gray-600">Kesintisiz teknik destek</p>
            </div>
        </div>
    </div>
</section>
@endsection

