<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - Unitas Sistem Informasi</title>

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

    <main class="flex-1 flex items-center justify-center py-20 px-6 max-w-7xl mx-auto w-full">
        
        <div class="bg-white rounded-3xl p-8 md:p-16 border border-slate-200 shadow-xs text-center space-y-8 max-w-2xl mx-auto">
            
            <!-- Title & Subtitle (Clean Tanpa Badge Sampingan) -->
            <div class="space-y-3">
                <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                    {{ $title }}
                </h1>
                <p class="text-slate-500 text-sm md:text-base font-medium leading-relaxed">
                    {{ $subtitle }}
                </p>
            </div>

            <!-- Coming Soon Banner -->
            <div class="p-6 rounded-2xl bg-blue-50/60 border border-blue-100">
                <span class="text-2xl md:text-3xl font-black text-[#334EAC] tracking-widest uppercase">
                    🚀 COMING SOON 🚀
                </span>
            </div>

            <!-- Button Back to Home (Warna Kontras & Jelas Tanpa Harus Hover) -->
            <div class="pt-2 flex justify-center">
                <a href="{{ url('/') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-[#334EAC] hover:bg-blue-800 text-white font-extrabold text-sm transition-all shadow-md focus:outline-none">
                    <span>&larr; Kembali ke Beranda</span>
                </a>
            </div>

        </div>

    </main>

    <x-footer />

</body>
</html>