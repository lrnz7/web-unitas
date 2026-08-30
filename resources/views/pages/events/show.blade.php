<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $event['title'] }} - Unitas Sistem Informasi</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; }
    </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 w-full max-w-[1440px] px-6 lg:px-12 py-10 mx-auto space-y-12">

        {{-- Tombol Kembali --}}
        <div>
            <a href="{{ url('/events') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800 transition-colors inline-flex items-center gap-2">
                &larr; Kembali ke Daftar Event
            </a>
        </div>

        {{-- Event Hero Header Card --}}
        <div class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200/80 shadow-xs space-y-6">
            {{-- Category Badge & Date --}}
            <div class="flex items-center gap-4">
                <span class="px-3 py-1 rounded-full bg-blue-50 text-[#334EAC] text-xs font-black uppercase tracking-wider border border-blue-100">
                    {{ $event['category'] ?? 'EVENT' }}
                </span>
                <span class="text-xs font-semibold text-slate-400">
                    {{ $event['date_label'] ?? $event['date'] }}
                </span>
            </div>

            {{-- Title --}}
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                {{ $event['title'] }}
            </h1>

            <hr class="border-slate-100">

            {{-- Description --}}
            <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-4xl font-medium">
                {{ $event['description'] }}
            </p>
        </div>

        {{-- Section Dokumentasi Event --}}
        <div class="space-y-6">
            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">
                Dokumentasi {{ $event['title'] }}
            </h2>

            {{-- Grid Foto Galeri --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse($photos as $index => $photo)
                    <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] bg-slate-900 shadow-xs hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-slate-200/50">
                        <img src="{{ Str::startsWith($photo['url'], 'http') ? $photo['url'] : asset($photo['url']) }}" 
                             alt="Dokumentasi {{ $event['title'] }}" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        
                        <div class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <span class="text-white text-xs font-bold">Dokumentasi {{ $index + 1 }}</span>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center text-slate-400 text-sm border border-dashed border-slate-200 rounded-2xl">
                        Belum ada foto dokumentasi untuk event ini.
                    </div>
                @endforelse
            </div>
        </div>

    </main>

    <x-footer />

</body>
</html>