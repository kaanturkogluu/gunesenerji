<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel - UKPower')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .sidebar-link.active {
            background-color: #0066cc;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        {{-- Sidebar --}}
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-6 border-b border-gray-800">
                <h2 class="text-2xl font-bold">
                    <i class="fas fa-solar-panel mr-2"></i>UKPower
                </h2>
                <p class="text-sm text-gray-400">Admin Panel</p>
            </div>
            
            <nav class="p-4">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center px-4 py-3 rounded-lg mb-2 hover:bg-gray-800 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="sidebar-link flex items-center px-4 py-3 rounded-lg mb-2 hover:bg-gray-800 {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                    <i class="fas fa-blog mr-3"></i> Blog Yazıları
                </a>
                <a href="{{ route('admin.projects.index') }}" class="sidebar-link flex items-center px-4 py-3 rounded-lg mb-2 hover:bg-gray-800 {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                    <i class="fas fa-folder-open mr-3"></i> Projeler
                </a>
                <a href="{{ route('admin.messages') }}" class="sidebar-link flex items-center px-4 py-3 rounded-lg mb-2 hover:bg-gray-800 {{ request()->routeIs('admin.messages') ? 'active' : '' }}">
                    <i class="fas fa-envelope mr-3"></i> Mesajlar
                </a>
                <hr class="border-gray-800 my-4">
                <a href="{{ route('home') }}" class="sidebar-link flex items-center px-4 py-3 rounded-lg mb-2 hover:bg-gray-800" target="_blank">
                    <i class="fas fa-globe mr-3"></i> Siteyi Görüntüle
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-link flex items-center px-4 py-3 rounded-lg mb-2 hover:bg-gray-800 w-full text-left">
                        <i class="fas fa-sign-out-alt mr-3"></i> Çıkış Yap
                    </button>
                </form>
            </nav>
        </aside>
        
        {{-- Main Content --}}
        <div class="flex-1 flex flex-col overflow-hidden">
            {{-- Top Bar --}}
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
                    <div class="flex items-center">
                        <span class="text-gray-700 mr-3">{{ auth()->user()->name }}</span>
                        <i class="fas fa-user-circle text-2xl text-gray-600"></i>
                    </div>
                </div>
            </header>
            
            {{-- Content --}}
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif
                
                @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

