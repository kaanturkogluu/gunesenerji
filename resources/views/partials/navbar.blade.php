{{-- 
    Navbar Component - Ersisenerji.com.tr tarzında
    Kullanım: @include('partials.navbar')
--}}

<!-- Top Bar (İletişim Bilgileri) -->
<div class="bg-gray-100 py-2 hidden lg:block">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center text-sm text-gray-600">
            <div class="flex items-center space-x-4">
                <a href="tel:+905367722902" class="hover:text-primary">
                    <i class="fas fa-phone mr-1"></i> +90 536 772 29 02
                </a>
                <a href="mailto:info@ukpower.com" class="hover:text-primary">
                    <i class="fas fa-envelope mr-1"></i> info@ukpower.com
                </a>
            </div>
            <div class="flex items-center space-x-3">
                <a href="#" class="hover:text-primary"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-primary"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-primary"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-primary"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-primary">
                    <i class="fas fa-solar-panel mr-2"></i>
                    UKPower
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary transition {{ request()->routeIs('home') ? 'text-primary font-semibold' : '' }}">
                    Ana Sayfa
                </a>
                
                <!-- Kurumsal Dropdown -->
                <div class="relative group">
                    <button class="text-gray-700 hover:text-primary transition flex items-center">
                        Kurumsal
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div class="absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="{{ route('about') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-primary">
                            Hakkımızda
                        </a>
                        <a href="{{ route('policies') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-primary">
                            Firma Politikalarımız
                        </a>
                        <a href="{{ route('certificates') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-primary">
                            Kalite Belgelerimiz
                        </a>
                    </div>
                </div>
                
                <!-- Hizmetlerimiz -->
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-primary transition {{ request()->routeIs('services*') ? 'text-primary font-semibold' : '' }}">
                    Hizmetlerimiz
                </a>
                
                <!-- Projelerimiz -->
                <a href="{{ route('projects') }}" class="text-gray-700 hover:text-primary transition {{ request()->routeIs('projects*') ? 'text-primary font-semibold' : '' }}">
                    Projelerimiz
                </a>
                
                <!-- Blog -->
                <a href="{{ route('blog') }}" class="text-gray-700 hover:text-primary transition {{ request()->routeIs('blog*') ? 'text-primary font-semibold' : '' }}">
                    Blog
                </a>
                
                <!-- SSS -->
                <a href="{{ route('faq') }}" class="text-gray-700 hover:text-primary transition {{ request()->routeIs('faq') ? 'text-primary font-semibold' : '' }}">
                    SSS
                </a>
                
                <!-- İletişim -->
                <a href="{{ route('contact') }}" class="bg-primary text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
                    İletişim
                </a>
                
                <!-- Admin Paneli (Sadece admin için) -->
                @auth
                    @if(auth()->user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-primary transition">
                            <i class="fas fa-user-shield"></i> Admin
                        </a>
                    @endif
                @endauth
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden pb-4">
            <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-primary">Ana Sayfa</a>
            <div class="py-2">
                <p class="text-gray-700 font-semibold">Kurumsal</p>
                <a href="{{ route('about') }}" class="block py-2 pl-4 text-gray-600 hover:text-primary">Hakkımızda</a>
                <a href="{{ route('policies') }}" class="block py-2 pl-4 text-gray-600 hover:text-primary">Firma Politikalarımız</a>
                <a href="{{ route('certificates') }}" class="block py-2 pl-4 text-gray-600 hover:text-primary">Kalite Belgelerimiz</a>
            </div>
            <a href="{{ route('services') }}" class="block py-2 text-gray-700 hover:text-primary">Hizmetlerimiz</a>
            <a href="{{ route('projects') }}" class="block py-2 text-gray-700 hover:text-primary">Projelerimiz</a>
            <a href="{{ route('blog') }}" class="block py-2 text-gray-700 hover:text-primary">Blog</a>
            <a href="{{ route('faq') }}" class="block py-2 text-gray-700 hover:text-primary">SSS</a>
            <a href="{{ route('contact') }}" class="block py-2 text-primary font-semibold">İletişim</a>
            @auth
                @if(auth()->user()->is_admin)
                    <a href="{{ route('admin.dashboard') }}" class="block py-2 text-gray-700 hover:text-primary">
                        <i class="fas fa-user-shield"></i> Admin Paneli
                    </a>
                @endif
            @endauth
        </div>
    </div>
</nav>

