{{-- 
    Footer Component - Ersisenerji.com.tr tarzında
    Kullanım: @include('partials.footer')
--}}
<footer class="bg-gray-900 text-gray-300">
    <!-- Main Footer -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div>
                <h3 class="text-white text-xl font-bold mb-4">
                    <i class="fas fa-solar-panel mr-2 text-primary"></i>
                    UKPower
                </h3>
                <p class="mb-4 text-sm">
                    Güneş enerjisi paneli kurulumu ve yenilenebilir enerji çözümleri konusunda uzman ekibimizle hizmetinizdeyiz.
                </p>
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-primary transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            
            <!-- Hızlı Linkler -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4">Hızlı Linkler</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Ana Sayfa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Hakkımızda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Hizmetlerimiz
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Projelerimiz
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> SSS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> İletişim
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Hizmetlerimiz -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4">Hizmetlerimiz</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('services') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> GES Kurulumu
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> RES Hizmetleri
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Danışmanlık
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="hover:text-primary transition">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Biyokütle Yakıt
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- İletişim Bilgileri -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4">İletişim</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-primary mt-1 mr-3"></i>
                        <span>Ankara, Türkiye</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-primary mr-3"></i>
                        <a href="tel:+905367722902" class="hover:text-primary transition">
                            +90 536 772 29 02
                        </a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-primary mr-3"></i>
                        <a href="mailto:info@ukpower.com" class="hover:text-primary transition">
                            info@ukpower.com
                        </a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock text-primary mr-3"></i>
                        <span>Pzt-Cum: 09:00 - 18:00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Bottom Footer -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; {{ date('Y') }} UKPower. Tüm hakları saklıdır.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-primary transition">Gizlilik Politikası</a>
                    <a href="#" class="hover:text-primary transition">Çerez Politikası</a>
                    <a href="#" class="hover:text-primary transition">KVKK</a>
                </div>
            </div>
        </div>
    </div>
</footer>

