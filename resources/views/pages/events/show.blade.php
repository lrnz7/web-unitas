<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $event['title'] }} - Unitas Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; } </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-5xl mx-auto w-full space-y-10">
        
        <!-- Tombol Kembali -->
        <div>
            <a href="{{ url('/events') }}" class="inline-flex items-center gap-2 text-xs font-extrabold text-slate-500 hover:text-[#334EAC] transition-colors">
                &larr; Kembali ke Daftar Event
            </a>
        </div>

        <!-- Detail Event Header -->
        <article class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-6">
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="px-3.5 py-1 rounded-full text-xs font-black bg-blue-50 text-[#334EAC] border border-blue-100 uppercase">
                        {{ $event['category'] }}
                    </span>
                    <span class="text-xs font-bold text-slate-400 font-mono">{{ $event['date'] }}</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                    {{ $event['title'] }}
                </h1>
            </div>

            <!-- Full Penjelasan Event -->
            <div class="text-slate-600 text-sm md:text-base leading-relaxed font-medium border-t border-slate-100 pt-6">
                <p>{{ $event['description'] }}</p>
            </div>
        </article>

        <!-- Galeri Dokumentasi Khusus Event Ini -->
        <section class="space-y-6">
            <div class="border-b border-slate-200 pb-4">
                <h2 class="text-2xl font-black text-slate-900">Dokumentasi {{ $event['title'] }}</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($event['gallery'] as $imgUrl)
                    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-lg transition-all">
                        <img src="{{ $imgUrl }}" alt="Dokumentasi {{ $event['title'] }}" class="w-full h-56 object-cover">
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>