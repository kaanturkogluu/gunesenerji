@extends('layouts.admin')

@section('title', 'Projeler - Admin Panel')
@section('page-title', 'Projeler')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 inline-block">
        <i class="fas fa-plus mr-2"></i> Yeni Proje
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Proje Adı</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Lokasyon</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kapasite</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">İşlem</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($projects as $project)
            <tr>
                <td class="px-6 py-4"><div class="text-sm font-medium text-gray-900">{{ $project->title }}</div></td>
                <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full uppercase">{{ $project->category }}</span></td>
                <td class="px-6 py-4 text-sm text-gray-500">{{ $project->location ?? '-' }}</td>
                <td class="px-6 py-4 text-sm text-gray-500">{{ $project->capacity ?? '-' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600 hover:text-blue-900 mr-3">Düzenle</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="px-6 py-4 text-center text-gray-500">Henüz proje yok</td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="p-4">{{ $projects->links() }}</div>
</div>
@endsection

