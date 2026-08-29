<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Resmi Unitas Sistem Informasi - Wadah kreasi, inovasi, dan kolaborasi mahasiswa Sistem Informasi.">

    <title>Unitas Sistem Informasi</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased selection:bg-[#334EAC] selection:text-white overflow-x-hidden">
    <div class="w-full min-h-screen bg-slate-50 flex flex-col">
        <!-- Navbar Component -->
        <x-navbar />

        <!-- Main Content -->
        <main class="w-full flex-1">
            <!-- 1. Background Selamat Datang -->
            <x-hero />

            <!-- 2. About Us Unitas -->
            <x-about-section />

            <!-- 4. Blog Terkini -->
            <x-blog-section />

            <!-- 5. Features Section -->
            <x-features-section />

            <!-- 6. Galeri Section -->
            <x-gallery-section />
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</body>
</html>