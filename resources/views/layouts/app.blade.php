<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FAQ ASIIN')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    @include('layouts.public-navigation')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-600">
                <p>&copy; {{ date('Y') }} FAQ ASIIN. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Alpine.js untuk accordion functionality
        document.addEventListener('alpine:init', () => {
            Alpine.data('accordion', () => ({
                open: false,
                toggle() {
                    this.open = !this.open
                }
            }))
        })
    </script>
</body>
</html>
