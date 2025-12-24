@extends('layouts.frontend')
@section('title', 'Kalite Belgelerimiz - UKPower')
@section('content')
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold">Kalite Belgelerimiz</h1>
    </div>
</section>
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fas fa-certificate text-5xl text-primary mb-4"></i>
                <h3 class="font-bold text-gray-900 mb-2">ISO 9001</h3>
                <p class="text-gray-600">Kalite Yönetim Sistemi</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fas fa-certificate text-5xl text-primary mb-4"></i>
                <h3 class="font-bold text-gray-900 mb-2">ISO 14001</h3>
                <p class="text-gray-600">Çevre Yönetim Sistemi</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fas fa-certificate text-5xl text-primary mb-4"></i>
                <h3 class="font-bold text-gray-900 mb-2">ISO 45001</h3>
                <p class="text-gray-600">İş Sağlığı ve Güvenliği</p>
            </div>
        </div>
    </div>
</section>
@endsection

