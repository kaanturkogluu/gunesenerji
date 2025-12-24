@extends('layouts.frontend')

@section('title', 'Sıkça Sorulan Sorular - UKPower')

@section('content')
{{-- Page Header --}}
<section class="bg-gradient-to-r from-blue-600 to-green-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Sıkça Sorulan Sorular</h1>
        <p class="text-xl">Güneş enerjisi hakkında merak ettikleriniz</p>
    </div>
</section>

{{-- FAQ Content --}}
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            @forelse($faqs as $category => $categoryFaqs)
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 capitalize">
                        {{ $category == 'ges' ? 'Güneş Enerjisi Santralleri' : ($category == 'res' ? 'Rüzgar Santralleri' : 'Genel') }}
                    </h2>
                    
                    <div class="space-y-4">
                        @foreach($categoryFaqs as $faq)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <button class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                                <span class="font-semibold text-gray-900 pr-4">{{ $faq->question }}</span>
                                <i class="fas fa-chevron-down text-primary transition-transform"></i>
                            </button>
                            <div class="faq-answer hidden px-6 py-4 bg-gray-50 border-t">
                                <p class="text-gray-600">{{ $faq->answer }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600">Henüz SSS eklenmemiş.</p>
            @endforelse
            
            {{-- CTA --}}
            <div class="mt-12 bg-primary text-white rounded-lg p-8 text-center">
                <h3 class="text-2xl font-bold mb-4">Sorunuza cevap bulamadınız mı?</h3>
                <p class="mb-6">Bizimle iletişime geçin, size yardımcı olalım</p>
                <a href="{{ route('contact') }}" class="bg-white text-primary px-8 py-3 rounded-full hover:bg-gray-100 transition inline-block">
                    <i class="fas fa-envelope mr-2"></i> İletişime Geçin
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            // Toggle answer visibility
            answer.classList.toggle('hidden');
            
            // Rotate icon
            if (answer.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
</script>
@endpush
@endsection

