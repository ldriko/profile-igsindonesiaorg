@extends('layouts.app')

@section('title', 'Frequently Asked Questions - ASIIN')

@section('content')
<div class="space-y-8">
    <!-- Hero Section -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            {{ app()->getLocale() == 'en' ? 'Frequently Asked Questions' : 'Frequently Asked Questions' }}
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            {{ app()->getLocale() == 'en'
                ? 'Find answers to frequently asked questions. Select a category below to view the list of questions and answers.'
                : 'Temukan jawaban untuk pertanyaan yang sering diajukan. Pilih kategori di bawah ini untuk melihat daftar pertanyaan dan jawaban.' }}
        </p>
    </div>

    <!-- Search Bar -->
    <div class="max-w-md mx-auto">
        <div class="relative group">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="text"
                   class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                   placeholder="{{ app()->getLocale() == 'en' ? 'Search FAQ...' : 'Cari FAQ...' }}"
                   id="searchInput">
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="categoriesGrid">
        @foreach($categories as $category)
        <a href="{{ route('faq.category', $category->id) }}"
           class="group bg-white rounded-xl shadow-sm border border-gray-200 hover:shadow-xl hover:border-blue-300 transition-all duration-500 p-6 category-card transform hover:-translate-y-2 hover:scale-105"
           data-category-name="{{ strtolower($category->localizedName) }}"
           data-category-description="{{ strtolower($category->localizedDescription) }}">
            <div class="flex flex-col items-center text-center space-y-4">
                <!-- Icon -->
                <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl flex items-center justify-center group-hover:from-blue-100 group-hover:to-blue-200 transition-colors">
                    <span class="text-3xl">{{ $category->icon ?: '📄' }}</span>
                </div>
                <!-- Category Name -->
                <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">
                    {{ $category->localizedName }}
                </h3>

                <!-- Description -->
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ $category->localizedDescription }}
                </p>
                <!-- FAQ Count -->
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{ $category->active_faqs_count }} {{ app()->getLocale() == 'en' ? 'questions' : 'pertanyaan' }}</span>
                </div>

                <!-- Arrow -->
                <div class="flex items-center text-blue-600 group-hover:translate-x-1 transition-transform">
                    <span class="text-sm font-medium">{{ app()->getLocale() == 'en' ? 'View FAQ' : 'Lihat FAQ' }}</span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <!-- No Results Message -->
    <div id="noResults" class="hidden text-center py-12">
        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.47-.881-6.08-2.33"></path>
        </svg>
        <p class="text-gray-500 text-lg">
            {{ app()->getLocale() == 'en' ? 'No categories found matching your search.' : 'Tidak ada kategori yang cocok dengan pencarian Anda.' }}
        </p>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-8 text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="text-3xl font-bold mb-2">{{ $categories->count() }}</div>
                <div class="text-blue-100">{{ app()->getLocale() == 'en' ? 'Categories' : 'Kategori' }}</div>
            </div>
            <div>
                <div class="text-3xl font-bold mb-2">{{ $categories->sum('active_faqs_count') }}</div>
                <div class="text-blue-100">{{ app()->getLocale() == 'en' ? 'Total FAQ' : 'Total FAQ' }}</div>
            </div>
            <div>
                <div class="text-3xl font-bold mb-2">24/7</div>
                <div class="text-blue-100">{{ app()->getLocale() == 'en' ? 'Online Help' : 'Bantuan Online' }}</div>
            </div>
        </div>
    </div>
</div>

<script>
// Search functionality for categories
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const categoryCards = document.querySelectorAll('.category-card');
    const noResults = document.getElementById('noResults');
    let visibleCount = 0;

    categoryCards.forEach(card => {
        const categoryName = card.getAttribute('data-category-name');
        const categoryDescription = card.getAttribute('data-category-description');

        if (categoryName.includes(searchTerm) || categoryDescription.includes(searchTerm)) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    if (visibleCount === 0 && searchTerm !== '') {
        noResults.classList.remove('hidden');
    } else {
        noResults.classList.add('hidden');
    }
});
</script>
@endsection
