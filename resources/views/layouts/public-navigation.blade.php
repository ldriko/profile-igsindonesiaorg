<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <a href="{{ route('faq.index') }}" class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">FAQ</span>
                    </div>
                    <span class="text-xl font-semibold text-gray-900">ASIIN</span>
                </a>
            </div>

            <!-- Language Switcher -->
            <div class="flex items-center space-x-1">
                <span class="text-sm text-gray-500 mr-2">{{ app()->getLocale() == 'en' ? 'Language:' : 'Bahasa:' }}</span>
                <a href="{{ route('lang.switch', 'id') }}" 
                   class="px-3 py-1.5 text-sm font-medium rounded-md transition-colors {{ app()->getLocale() == 'id' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    ID
                </a>
                <a href="{{ route('lang.switch', 'en') }}" 
                   class="px-3 py-1.5 text-sm font-medium rounded-md transition-colors {{ app()->getLocale() == 'en' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    EN
                </a>
            </div>
        </div>
    </div>
</nav>
