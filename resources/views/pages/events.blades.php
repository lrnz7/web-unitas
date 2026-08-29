<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Daftar Kegiatan dan Dokumentasi Event Unitas Sistem Informasi Unindra">

    <title>Event & Kegiatan - Unitas Sistem Informasi</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; }
    </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-7xl mx-auto w-full space-y-16">
        
        <!-- Header Section -->
        <section class="text-center space-y-3">
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Event & Kegiatan Unitas
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                Rangkaian agenda, program kerja, dan dokumentasi kegiatan Unitas Sistem Informasi.
            </p>
        </section>

        <!-- Section 1: Daftar Event / Agenda Unitas -->
        <section class="space-y-6">
            <div class="border-b border-slate-200 pb-4">
                <h2 class="text-2xl font-black text-slate-900">Agenda & Program Kerja</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($events as $item)
                    <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-xs hover:border-blue-300 transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider {{ ($item['status'] ?? '') === 'upcoming' ? 'bg-emerald-50 text-emerald-700 border border-emerald-100' : 'bg-slate-100 text-slate-600' }}">
                                    {{ $item['category'] ?? 'Kegiatan' }}
                                </span>
                                <span class="text-xs font-bold text-slate-400 font-mono">
                                    {{ $item['date'] ?? '' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-extrabold text-slate-900 leading-snug">
                                {{ $item['title'] ?? '' }}
                            </h3>
                            <p class="text-xs text-slate-600 leading-relaxed font-medium">
                                {{ $item['description'] ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Section 2: Galeri Dokumentasi Kegiatan Unitas -->
        <section id="galeri" class="space-y-6">
            <div class="border-b border-slate-200 pb-4">
                <h2 class="text-2xl font-black text-slate-900">Dokumentasi Kegiatan</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($gallery as $gal)
                    <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-lg transition-all group">
                        <div class="relative h-48 w-full bg-slate-100 overflow-hidden">
                            <img src="{{ $gal['image'] ?? '' }}" 
                                 alt="{{ $gal['title'] ?? 'Dokumentasi' }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-4 bg-white text-center">
                            <h4 class="font-extrabold text-slate-900 text-sm">
                                {{ $gal['title'] ?? '' }}
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>