@extends('layouts.frontend')

@section('title', $project->title . ' - UKPower')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            {{-- Breadcrumb --}}
            <div class="mb-6 text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-primary">Ana Sayfa</a>
                <span class="mx-2">/</span>
                <a href="{{ route('projects') }}" class="hover:text-primary">Projelerimiz</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900">{{ $project->title }}</span>
            </div>
            
            {{-- Project Content --}}
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-96 bg-gradient-to-br from-blue-400 to-green-400"></div>
                
                <div class="p-8">
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-primary text-white rounded-full text-sm font-semibold uppercase">
                            {{ $project->category }}
                        </span>
                        <span class="text-2xl font-bold text-primary">
                            <i class="fas fa-bolt mr-2"></i>{{ $project->capacity ?? 'N/A' }}
                        </span>
                    </div>
                    
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $project->title }}</h1>
                    
                    <div class="mb-6 pb-6 border-b">
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <strong>Lokasyon:</strong> {{ $project->location ?? 'Belirtilmemiş' }}
                        </p>
                        @if($project->completed_at)
                        <p class="text-gray-600 mt-2">
                            <i class="far fa-calendar-check mr-2 text-primary"></i>
                            <strong>Tamamlanma Tarihi:</strong> {{ \Carbon\Carbon::parse($project->completed_at)->format('F Y') }}
                        </p>
                        @endif
                    </div>
                    
                    <div class="prose max-w-none">
                        {!! nl2br(e($project->description)) !!}
                    </div>
                </div>
            </div>
            
            {{-- Benzer Projeler --}}
            @if($relatedProjects->count() > 0)
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Benzer Projeler</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedProjects as $related)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover-scale">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-green-400"></div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $related->title }}</h3>
                            <p class="text-sm text-gray-600 mb-4">
                                <i class="fas fa-map-marker-alt mr-1"></i> {{ $related->location }}
                            </p>
                            <a href="{{ route('projects.show', $related->slug) }}" class="text-primary font-semibold hover:underline">
                                Detayları Görüntüle <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection

