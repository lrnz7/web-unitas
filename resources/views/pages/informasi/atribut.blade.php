<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Informasi dan Jadwal Pengambilan Atribut Mahasiswa Sistem Informasi Unindra">

    <title>Pengambilan Atribut - Unitas Sistem Informasi</title>

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
                Pengambilan Atribut Mahasiswa
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                {{ $atributData['description'] ?? 'Panduan resmi dan alur pengambilan jaket almamater serta atribut perkuliahan.' }}
            </p>
        </section>

        <!-- Banner Status & Info Lokasi -->
        <section class="bg-[#334EAC] text-white rounded-3xl p-8 shadow-xl grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
            <div class="space-y-1">
                <span class="text-[11px] font-bold text-blue-200 uppercase tracking-widest">Periode Layanan</span>
                <p class="text-lg font-extrabold">{{ $atributData['status_info']['periode'] ?? '-' }}</p>
            </div>
            <div class="space-y-1">
                <span class="text-[11px] font-bold text-blue-200 uppercase tracking-widest">Lokasi Pengambilan</span>
                <p class="text-sm font-bold leading-snug">{{ $atributData['status_info']['lokasi'] ?? '-' }}</p>
            </div>
            <div class="space-y-1">
                <span class="text-[11px] font-bold text-blue-200 uppercase tracking-widest">Jam Operasional</span>
                <p class="text-sm font-bold">{{ $atributData['status_info']['jam_operasional'] ?? '-' }}</p>
            </div>
        </section>

        <!-- Timeline Steps Flow -->
        <section class="space-y-8">
            <div class="border-b border-slate-200 pb-4">
                <h2 class="text-2xl font-black text-slate-900">Alur & Tahapan Pengambilan</h2>
                <p class="text-slate-500 text-xs md:text-sm mt-0.5">Ikuti 4 langkah mudah berikut saat datang ke lokasi pengambilan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(($atributData['steps'] ?? []) as $st)
                    <div class="bg-white rounded-3xl p-6 border-2 border-slate-200/80 shadow-xs hover:border-blue-300 transition-all space-y-3 relative overflow-hidden group">
                        <div class="w-10 h-10 rounded-2xl bg-blue-50 text-[#334EAC] font-black text-lg flex items-center justify-center border border-blue-100 group-hover:bg-[#334EAC] group-hover:text-white transition-colors">
                            0{{ $st['step'] }}
                        </div>
                        <h3 class="font-extrabold text-slate-900 text-base leading-snug">
                            {{ $st['title'] }}
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed font-medium">
                            {{ $st['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-6">
            <div class="border-b border-slate-100 pb-4">
                <h2 class="text-2xl font-black text-slate-900">Pertanyaan Sering Diajukan (FAQ)</h2>
                <p class="text-slate-500 text-xs md:text-sm mt-0.5">Hal-hal penting yang perlu diperhatikan terkait atribut.</p>
            </div>

            <div class="space-y-4">
                @foreach(($atributData['faq'] ?? []) as $item)
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-2">
                        <h4 class="font-extrabold text-slate-900 text-sm flex items-center gap-2">
                            <span class="text-[#334EAC] font-black">Q:</span>
                            <span>{{ $item['q'] }}</span>
                        </h4>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium pl-6">
                            {{ $item['a'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>