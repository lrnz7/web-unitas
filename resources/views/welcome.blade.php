<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Resmi Unitas Sistem Informasi - Wadah kreasi, inovasi, dan kolaborasi mahasiswa Sistem Informasi.">

    <title>Unitas Sistem Informasi</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS v4 Browser CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

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
            <!-- 1. Hero Section -->
            <x-hero />

            <!-- 2. Profil & About Program Studi -->
            <x-about-section />

            <!-- 3. Panduan Akademis & Kurikulum Program Studi (Nempel dengan About Prodi) -->
            <x-academic-section />

            <!-- 4. Pojok Informasi Terkini Mahasiswa (Pengumuman & Jadwal) -->
            <x-info-corner :infoCorner="$infoCorner" />

            <!-- 5. Blog & Artikel Terkini -->
            <x-blog-section />

            <!-- 6. Features & Additional Tools Section -->
            <x-features-section />

            <!-- 7. Galeri Section -->
            <x-gallery-section />
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</body>
</html>