<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Denah dan Peta Lokasi Kampus A, B, dan C Universitas Indraprasta PGRI">

    <title>Denah Kampus - Unitas Sistem Informasi</title>

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

    <main class="flex-1 py-12 px-6 max-w-7xl mx-auto w-full space-y-12">
        
        <!-- Header Section -->
        <section class="text-center space-y-3">
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Lokasi & Denah Kampus
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                Informasi peta visual, alamat lengkap, dan fasilitas perkuliahan Universitas Indraprasta PGRI.
            </p>
        </section>

        <!-- Grid 3 Kampus -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
            @foreach($denahList as $kampus)
                <div class="bg-white rounded-3xl border border-slate-200 shadow-xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 overflow-hidden flex flex-col justify-between group">
                    
                    <div class="space-y-5">
                        <!-- Visual/Photo Kampus Placeholder -->
                        <div class="relative h-52 w-full overflow-hidden bg-slate-100">
                            <img src="{{ $kampus['image'] }}" 
                                 alt="{{ $kampus['name'] }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <span class="absolute top-4 left-4 bg-[#334EAC] text-white text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                {{ $kampus['code'] }}
                            </span>
                        </div>

                        <!-- Info Content -->
                        <div class="px-6 space-y-4">
                            <h2 class="text-xl font-black text-slate-900 tracking-tight">
                                {{ $kampus['name'] }}
                            </h2>

                            <!-- Alamat -->
                            <p class="text-xs text-slate-500 font-medium leading-relaxed flex items-start gap-2">
                                <svg class="w-4 h-4 text-[#334EAC] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>{{ $kampus['address'] }}</span>
                            </p>

                            <!-- Fasilitas List -->
                            <div class="space-y-2 pt-2 border-t border-slate-100">
                                <span class="text-[11px] font-black uppercase tracking-wider text-slate-400">Fasilitas Utama:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach($kampus['facilities'] as $fac)
                                        <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-bold">
                                            {{ $fac }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Maps Embed Placeholder Footer -->
                    <div class="p-6 pt-4">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 h-44 w-full bg-slate-100 relative">
                            <iframe src="{{ $kampus['maps_iframe'] }}" 
                                    class="w-full h-full border-0" 
                                    allowfullscreen="" 
                                    loading="lazy">
                            </iframe>
                        </div>
                    </div>

                </div>
            @endforeach
        </section>

    </main>

    <x-footer />

</body>
</html>