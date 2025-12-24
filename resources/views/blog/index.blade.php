@extends('layouts.frontend')

@section('title', 'Blog - UKPower')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Blog</h1>
        <p class="text-xl">Güneş enerjisi ve yenilenebilir enerji hakkında güncel bilgiler</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Blog Posts --}}
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse($blogs as $blog)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                        <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-400"></div>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar mr-1"></i> {{ $blog->published_at->format('d.m.Y') }}
                                <span class="mx-2">•</span>
                                <i class="far fa-eye mr-1"></i> {{ $blog->views }} görüntülenme
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $blog->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($blog->excerpt, 100) }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="text-primary font-semibold hover:underline">
                                Devamını Oku <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </article>
                    @empty
                    <p class="col-span-2 text-center text-gray-600">Henüz blog yazısı yok.</p>
                    @endforelse
                </div>
                
                {{-- Pagination --}}
                <div class="mt-8">
                    {{ $blogs->links() }}
                </div>
            </div>
            
            {{-- Sidebar --}}
            <div>
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Popüler Yazılar</h3>
                    <div class="space-y-4">
                        @foreach($popularBlogs as $popular)
                        <a href="{{ route('blog.show', $popular->slug) }}" class="block hover:text-primary transition">
                            <h4 class="font-semibold text-gray-900 mb-1">{{ $popular->title }}</h4>
                            <p class="text-sm text-gray-500">
                                <i class="far fa-eye mr-1"></i> {{ $popular->views }} görüntülenme
                            </p>
                        </a>
                        @if(!$loop->last)
                        <hr>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

