<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi Kami - Unitas Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; } </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-7xl mx-auto w-full space-y-12">
        
        <section class="text-center space-y-3">
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Hubungi Kami
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                Punya pertanyaan, ajakan kolaborasi, atau butuh informasi? Hubungi Unitas Sistem Informasi melalui kanal resmi di bawah.
            </p>
        </section>

        <!-- Grid Cards Kontak -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Email Card -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-xs space-y-4 hover:border-blue-300 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 text-[#334EAC] flex items-center justify-center font-black text-xl">
                    ✉️
                </div>
                <div class="space-y-1">
                    <h3 class="text-lg font-black text-slate-900">Email Resmi</h3>
                    <p class="text-xs text-slate-500 font-medium">Kirim surat resmi atau pertanyaan kemitraan.</p>
                </div>
                <a href="mailto:{{ $kontakData['email'] ?? '#' }}" class="inline-block text-xs font-black text-[#334EAC] hover:underline break-all">
                    {{ $kontakData['email'] ?? 'unitas.si@unindra.ac.id' }}
                </a>
            </div>

            <!-- WhatsApp Card -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-xs space-y-4 hover:border-blue-300 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-black text-xl">
                    💬
                </div>
                <div class="space-y-1">
                    <h3 class="text-lg font-black text-slate-900">WhatsApp Official</h3>
                    <p class="text-xs text-slate-500 font-medium">Layanan respon cepat seputar kegiatan & informasi.</p>
                </div>
                <a href="https://wa.me/{{ $kontakData['whatsapp'] ?? '' }}" target="_blank" class="inline-block text-xs font-black text-emerald-600 hover:underline">
                    Hubungi via WhatsApp &rarr;
                </a>
            </div>

            <!-- Sekretariat Card -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-xs space-y-4 hover:border-blue-300 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-slate-100 text-slate-700 flex items-center justify-center font-black text-xl">
                    📍
                </div>
                <div class="space-y-1">
                    <h3 class="text-lg font-black text-slate-900">Sekretariat Unitas</h3>
                    <p class="text-xs text-slate-500 font-medium leading-relaxed">
                        {{ $kontakData['sekretariat'] ?? 'Kampus A Unindra Rancho' }}
                    </p>
                </div>
                <span class="inline-block text-[11px] font-bold text-slate-400">
                    {{ $kontakData['jam_layanan'] ?? '' }}
                </span>
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>