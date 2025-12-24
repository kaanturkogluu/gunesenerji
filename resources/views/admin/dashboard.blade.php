@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')
@section('page-title', 'Dashboard')

@section('content')
{{-- İstatistik Kartları --}}
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Blog Yazıları</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['blogs'] }}</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <i class="fas fa-blog text-2xl text-blue-600"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Yayında</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['published_blogs'] }}</p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                <i class="fas fa-check-circle text-2xl text-green-600"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Projeler</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['projects'] }}</p>
            </div>
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                <i class="fas fa-folder-open text-2xl text-purple-600"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Okunmamış Mesaj</p>
                <p class="text-3xl font-bold text-gray-900">{{ $stats['unread_messages'] }}</p>
            </div>
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                <i class="fas fa-envelope text-2xl text-red-600"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    {{-- Son Mesajlar --}}
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-900">Son Mesajlar</h3>
        </div>
        <div class="p-6">
            @forelse($recentMessages as $message)
            <div class="mb-4 pb-4 border-b last:border-0">
                <div class="flex justify-between items-start mb-2">
                    <h4 class="font-semibold text-gray-900">{{ $message->name }}</h4>
                    <span class="text-xs text-gray-500">{{ $message->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-sm text-gray-600">{{ Str::limit($message->message, 80) }}</p>
            </div>
            @empty
            <p class="text-gray-500">Henüz mesaj yok</p>
            @endforelse
        </div>
    </div>
    
    {{-- Son Blog Yazıları --}}
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-900">Son Blog Yazıları</h3>
        </div>
        <div class="p-6">
            @forelse($recentBlogs as $blog)
            <div class="mb-4 pb-4 border-b last:border-0">
                <div class="flex justify-between items-start mb-2">
                    <h4 class="font-semibold text-gray-900">{{ $blog->title }}</h4>
                    <span class="text-xs {{ $blog->is_published ? 'text-green-600' : 'text-gray-500' }}">
                        {{ $blog->is_published ? 'Yayında' : 'Taslak' }}
                    </span>
                </div>
                <p class="text-sm text-gray-500">{{ $blog->created_at->format('d.m.Y H:i') }}</p>
            </div>
            @empty
            <p class="text-gray-500">Henüz blog yazısı yok</p>
            @endforelse
        </div>
    </div>
</div>
@endsection

