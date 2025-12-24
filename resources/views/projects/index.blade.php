@extends('layouts.frontend')

@section('title', 'Projelerimiz - UKPower')

@section('content')
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Projelerimiz</h1>
        <p class="text-xl">Başarıyla tamamladığımız güneş ve rüzgar enerjisi projeleri</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        {{-- Kategori Filtreleri --}}
        <div class="flex justify-center mb-8 flex-wrap gap-4">
            <a href="{{ route('projects') }}" class="px-6 py-2 rounded-full {{ !request('category') ? 'bg-primary text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Tümü
            </a>
            <a href="{{ route('projects', ['category' => 'ges']) }}" class="px-6 py-2 rounded-full {{ request('category') == 'ges' ? 'bg-primary text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                GES
            </a>
            <a href="{{ route('projects', ['category' => 'res']) }}" class="px-6 py-2 rounded-full {{ request('category') == 'res' ? 'bg-primary text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                RES
            </a>
        </div>
        
        {{-- Projeler Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($projects as $project)
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
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-600">Henüz proje eklenmemiş.</p>
            </div>
            @endforelse
        </div>
        
        {{-- Pagination --}}
        <div class="mt-8">
            {{ $projects->links() }}
        </div>
    </div>
</section>
@endsection

