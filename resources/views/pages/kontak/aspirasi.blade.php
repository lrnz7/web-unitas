<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suara Mahasiswa - Unitas Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; } </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-4xl mx-auto w-full space-y-8" x-data="{ submitted: false }">
        
        <div class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-8">
            
            <div class="text-center space-y-3 border-b border-slate-100 pb-6">
                <span class="text-[11px] font-black uppercase tracking-widest text-[#334EAC] bg-blue-50 px-4 py-1.5 rounded-full border border-blue-100">
                    Ruang Interaksi
                </span>
                <h1 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">
                    Suara Mahasiswa
                </h1>
                <p class="text-slate-500 text-xs md:text-sm max-w-lg mx-auto font-medium leading-relaxed">
                    Sampaikan kritik, saran, ide, atau keluhan kamu. Pesan ini akan dikelola langsung oleh pengurus Unitas Sistem Informasi.
                </p>
            </div>

            <template x-if="!submitted">
                <form @submit.prevent="submitted = true" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700">Nama Pengirim *</label>
                            <input type="text" required placeholder="Boleh samaran / anonim" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700">NPM *</label>
                            <input type="text" required placeholder="Contoh: 20244350..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700">Pesan Aspirasi *</label>
                        <textarea rows="6" required placeholder="Tuliskan uneg-uneg, kritik membangun, atau saranmu di sini..." class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-bold text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#334EAC]"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 rounded-full bg-[#334EAC] hover:bg-blue-800 text-white font-extrabold text-sm transition-all shadow-md">
                        Kirim Aspirasi Sekarang &rarr;
                    </button>
                </form>
            </template>

            <!-- Success State -->
            <template x-if="submitted">
                <div class="py-12 text-center space-y-4">
                    <span class="text-4xl">🎉</span>
                    <h3 class="text-xl font-black text-slate-900">Aspirasi Berhasil Terkirim!</h3>
                    <p class="text-xs text-slate-500 max-w-md mx-auto font-medium leading-relaxed">
                        Terima kasih telah bersuara. Aspirasimu telah tersimpan dan akan ditinjau oleh tim Unitas SI.
                    </p>
                    <button @click="submitted = false" class="px-6 py-2.5 rounded-full bg-slate-100 text-slate-800 font-bold text-xs hover:bg-slate-200 transition-all">
                        Kirim Aspirasi Lain
                    </button>
                </div>
            </template>

        </div>

    </main>

    <x-footer />

</body>
</html>