@extends('layouts.frontend')

@section('title', $blog->title . ' - UKPower')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            {{-- Breadcrumb --}}
            <div class="mb-6 text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-primary">Ana Sayfa</a>
                <span class="mx-2">/</span>
                <a href="{{ route('blog') }}" class="hover:text-primary">Blog</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900">{{ $blog->title }}</span>
            </div>
            
            {{-- Blog Header --}}
            <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                @if($blog->featured_image)
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-96 object-cover">
                @else
                <div class="w-full h-96 bg-gradient-to-br from-yellow-400 to-orange-400"></div>
                @endif
                
                <div class="p-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>
                    
                    <div class="flex items-center text-gray-600 mb-6 pb-6 border-b">
                        <i class="far fa-calendar mr-2"></i>
                        <span>{{ $blog->published_at->format('d.m.Y') }}</span>
                        <span class="mx-3">•</span>
                        <i class="far fa-eye mr-2"></i>
                        <span>{{ $blog->views }} görüntülenme</span>
                    </div>
                    
                    @if($blog->excerpt)
                    <div class="text-xl text-gray-600 mb-6 italic">
                        {{ $blog->excerpt }}
                    </div>
                    @endif
                    
                    <div class="prose max-w-none">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
            </article>
            
            {{-- İlgili Yazılar --}}
            @if($relatedBlogs->count() > 0)
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">İlgili Yazılar</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedBlogs as $related)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                        <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-400"></div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $related->title }}</h3>
                            <a href="{{ route('blog.show', $related->slug) }}" class="text-primary font-semibold hover:underline">
                                Devamını Oku <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection

