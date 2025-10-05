@extends('layouts.app')

@section('title', $category->name . ' - FAQ ASIIN')

@section('content')
<div class="space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-3">
            <li>
                <div>
                    <a href="{{ route('faq.index') }}" class="text-gray-500 hover:text-blue-600 transition-colors group">
                        <svg class="flex-shrink-0 h-5 w-5 group-hover:text-blue-600 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        <span class="sr-only">{{ app()->getLocale() == 'en' ? 'Home' : 'Beranda' }}</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-4 w-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('faq.index') }}" class="ml-3 text-sm font-medium text-gray-500 hover:text-blue-600 transition-colors">FAQ</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 h-4 w-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3 text-sm font-medium text-blue-600">{{ $category->localizedName }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Category Header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-8 text-white">
        <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl flex items-center justify-center">
                <span class="text-3xl">{{ $category->icon ?: '📄' }}</span>
            </div>
            <div>
                <h1 class="text-3xl font-bold mb-2">{{ $category->localizedName }}</h1>
                <p class="text-blue-100 text-lg">{{ $category->localizedDescription }}</p>
                <div class="flex items-center mt-3 text-blue-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{ $category->activeFaqs->count() }} {{ app()->getLocale() == 'en' ? 'questions available' : 'pertanyaan tersedia' }}</span>
                </div>
            </div>
        </div>
    </div>

    @if($category->activeFaqs->count() > 0)
        <!-- Search FAQ -->
        <div class="max-w-md mx-auto">
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text"
                       id="searchFaq"
                       class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                       placeholder="{{ app()->getLocale() == 'en' ? 'Search questions in this category...' : 'Cari pertanyaan dalam kategori ini...' }}">
            </div>
        </div>

        <!-- FAQ Accordion -->
        <div class="max-w-7xl mx-auto space-y-4" id="faqContainer">
            @foreach($category->activeFaqs as $index => $faq)
            <div class="faq-item bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden">
                <button class="w-full px-6 py-5 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 accordion-button group"
                        onclick="toggleAccordion({{ $index }})">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4 faq-question group-hover:text-blue-600 transition-colors duration-200">
                            {{ $faq->localizedQuestion }}
                        </h3>
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 rounded-full bg-blue-50 group-hover:bg-blue-100 flex items-center justify-center transition-all duration-300">
                                <svg class="w-5 h-5 text-blue-600 transform transition-transform duration-300 accordion-icon-{{ $index }}"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </button>
                <div class="accordion-content-{{ $index }} max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="px-6 pb-6">
                        <div class="border-t border-gray-100 pt-4">
                            <div class="text-gray-700 leading-relaxed faq-answer prose prose-blue max-w-none">
                                {!! $faq->localizedAnswer !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-16">
            <div class="animate-bounce">
                <svg class="mx-auto h-16 w-16 text-blue-400 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                {{ app()->getLocale() == 'en' ? 'No results found' : 'Tidak ada hasil ditemukan' }}
            </h3>
            <p class="text-gray-500 text-lg max-w-md mx-auto">
                {{ app()->getLocale() == 'en' ? 'Try searching with different keywords or browse all questions below.' : 'Coba cari dengan kata kunci yang berbeda atau lihat semua pertanyaan di bawah.' }}
            </p>
        </div>
    @else
        <!-- Empty State -->
        <div class="text-center py-20">
            <div class="animate-pulse">
                <svg class="mx-auto h-20 w-20 text-blue-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                {{ app()->getLocale() == 'en' ? 'No FAQ Available Yet' : 'Belum Ada FAQ' }}
            </h3>
            <p class="text-gray-500 text-lg max-w-md mx-auto mb-8">
                {{ app()->getLocale() == 'en' ? 'This category doesn\'t have any questions and answers yet. Check back later!' : 'Kategori ini belum memiliki pertanyaan dan jawaban. Coba lagi nanti!' }}
            </p>
            <a href="{{ route('faq.index') }}"
               class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                {{ app()->getLocale() == 'en' ? 'Browse Other Categories' : 'Lihat Kategori Lain' }}
            </a>
        </div>
    @endif

    {{-- <!-- Back to Categories -->
    <div class="text-center">
        <a href="{{ route('faq.index') }}"
           class="inline-flex items-center px-8 py-3 bg-white border-2 border-blue-600 rounded-xl text-blue-600 font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
            <svg class="w-5 h-5 mr-3 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            {{ app()->getLocale() == 'en' ? 'Back to All Categories' : 'Kembali ke Semua Kategori' }}
        </a>
    </div> --}}
</div>

<script>
// Accordion functionality with smooth animations
function toggleAccordion(index) {
    const content = document.querySelector(`.accordion-content-${index}`);
    const icon = document.querySelector(`.accordion-icon-${index}`);
    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

    // Close all other accordions
    document.querySelectorAll('[class*="accordion-content-"]').forEach((otherContent, otherIndex) => {
        if (otherIndex !== index) {
            otherContent.style.maxHeight = '0px';
            const otherIcon = document.querySelector(`.accordion-icon-${otherIndex}`);
            if (otherIcon) {
                otherIcon.style.transform = 'rotate(0deg)';
            }
        }
    });

    // Toggle current accordion
    if (isOpen) {
        content.style.maxHeight = '0px';
        icon.style.transform = 'rotate(0deg)';
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
    }
}

// Search functionality
document.getElementById('searchFaq').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const faqItems = document.querySelectorAll('.faq-item');
    const noResults = document.getElementById('noResults');
    let visibleCount = 0;

    faqItems.forEach((item, index) => {
        const question = item.querySelector('.faq-question').textContent.toLowerCase();
        const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

        if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = 'block';
            visibleCount++;

            // Highlight search terms if found
            if (searchTerm && searchTerm.length > 2) {
                item.style.transform = 'scale(1.02)';
                item.style.borderColor = '#3B82F6';
            } else {
                item.style.transform = 'scale(1)';
                item.style.borderColor = '#E5E7EB';
            }
        } else {
            item.style.display = 'none';
            // Close accordion if hidden
            const content = item.querySelector(`[class*="accordion-content-"]`);
            const icon = item.querySelector(`[class*="accordion-icon-"]`);
            if (content) content.style.maxHeight = '0px';
            if (icon) icon.style.transform = 'rotate(0deg)';
        }
    });

    if (visibleCount === 0 && searchTerm !== '') {
        noResults.classList.remove('hidden');
    } else {
        noResults.classList.add('hidden');
    }
});

// Add smooth scroll to accordion when opened
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all accordions as closed
    document.querySelectorAll('[class*="accordion-content-"]').forEach(content => {
        content.style.maxHeight = '0px';
    });
});
</script>
@endsection
