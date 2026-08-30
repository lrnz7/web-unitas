<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Informasi Akademis, KRS, Biaya Kuliah, Ujian, dan Kurikulum Sistem Informasi Unindra">

    <title>Informasi Akademis - Unitas Sistem Informasi</title>

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

    <main class="flex-1 py-16 px-6 max-w-7xl mx-auto w-full space-y-12" x-data="{ activeTab: 'kurikulum' }">
        
        <!-- Header Section (Clean) -->
        <section class="text-center space-y-3">
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Pusat Informasi Akademis
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                Temukan panduan KRS, rincian biaya perkuliahan, aturan ujian, dan distribusi mata kuliah kurikulum Sistem Informasi.
            </p>
        </section>

        <!-- Dynamic Navigation Tabs (Presisi 100% Simetris Full Grid) -->
        <div class="p-1.5 bg-slate-200/60 rounded-3xl md:rounded-full max-w-4xl mx-auto w-full">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1.5 w-full">
                <button @click="activeTab = 'kurikulum'" 
                        :class="activeTab === 'kurikulum' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center">
                    Kurikulum & Materi
                </button>
                <button @click="activeTab = 'krs'" 
                        :class="activeTab === 'krs' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center">
                    Panduan KRS
                </button>
                <button @click="activeTab = 'biaya'" 
                        :class="activeTab === 'biaya' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center">
                    Biaya Perkuliahan
                </button>
                <button @click="activeTab = 'ujian'" 
                        :class="activeTab === 'ujian' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center">
                    Aturan Ujian
                </button>
            </div>
        </div>

        <!-- TAB 1: KURIKULUM & MATERI PERKULIAHAN -->
        <section x-show="activeTab === 'kurikulum'" x-transition class="space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                @foreach($curriculum as $sem)
                    @php $totalSksSemester = collect($sem['courses'])->sum('total_sks'); @endphp
                    
                    <!-- Card Semester dengan Efek Hover Premium -->
                    <div class="relative overflow-hidden rounded-3xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                        <!-- Header Card Semester -->
                        <div class="px-7 py-5 flex items-center justify-between border-b bg-slate-50 border-slate-100 relative z-10">
                            <h3 class="text-lg font-black tracking-tight uppercase text-slate-900 group-hover:text-[#334EAC] transition-colors">
                                Semester {{ $sem['semester'] }}
                            </h3>
                            <span class="text-xs font-extrabold px-3.5 py-1.5 rounded-full bg-blue-50 text-[#334EAC] border border-blue-100">
                                {{ $totalSksSemester }} Total SKS
                            </span>
                        </div>

                        <!-- Table -->
                        <div class="p-5 overflow-x-auto relative z-10">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="text-[11px] font-black uppercase text-slate-400 border-b border-slate-100">
                                        <th class="py-2 px-3">Kode</th>
                                        <th class="py-2 px-3">Mata Kuliah</th>
                                        <th class="py-2 px-3 text-center">Komponen SKS</th>
                                        <th class="py-2 px-3 text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-xs">
                                    @foreach($sem['courses'] as $course)
                                        <tr class="hover:bg-blue-50/70 transition-colors">
                                            <td class="py-3 px-3 font-mono font-bold text-slate-400">{{ $course['code'] }}</td>
                                            <td class="py-3 px-3 font-bold text-slate-800">{{ $course['name'] }}</td>
                                            <td class="py-3 px-3 text-center">
                                                <div class="flex flex-wrap items-center justify-center gap-1">
                                                    @if($course['teori'] > 0)
                                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-blue-50 text-blue-700 border border-blue-100">{{ $course['teori'] }} SKS Teori</span>
                                                    @endif
                                                    @if($course['praktikum'] > 0)
                                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">{{ $course['praktikum'] }} SKS Praktikum</span>
                                                    @endif
                                                    @if($course['praktek'] > 0)
                                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-100">{{ $course['praktek'] }} SKS Praktek</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="py-3 px-3 text-center">
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-lg font-black text-xs bg-slate-100 text-slate-700">
                                                    {{ $course['total_sks'] }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Slot Modul / Materi perkuliahan -->
                        <div class="px-6 py-3.5 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between text-xs relative z-10 mt-auto">
                            <span class="text-slate-500 font-medium">Materi Perkuliahan Semester {{ $sem['semester'] }}</span>
                            <span class="font-bold text-[#334EAC] cursor-not-allowed opacity-60" title="Akan segera hadir">
                                Download Modul (Soon) &rarr;
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- TAB 2: PANDUAN KRS (Frameless & Hover Cards) -->
        <section x-show="activeTab === 'krs'" x-transition class="space-y-8">
            <div class="border-b border-slate-200 pb-6">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">{{ $akademisData['krs']['title'] ?? 'Panduan KRS' }}</h2>
                <p class="text-slate-500 text-sm mt-1">{{ $akademisData['krs']['description'] ?? '' }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(($akademisData['krs']['timeline'] ?? []) as $step)
                    <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group space-y-3 cursor-default">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>
                        <span class="text-3xl font-black text-blue-200 absolute right-4 top-2 select-none z-10">0{{ $step['step'] }}</span>
                        <h3 class="font-extrabold text-slate-900 text-base relative z-10 group-hover:text-[#334EAC] transition-colors">{{ $step['title'] }}</h3>
                        <p class="text-xs text-slate-500 leading-relaxed relative z-10">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="pt-4 text-center">
                <a href="{{ $akademisData['krs']['https://mahasiswa.unindra.civitas.id/dashboard'] ?? '#' }}" target="_blank" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-[#334EAC] hover:bg-blue-800 text-white font-extrabold text-sm transition-all shadow-md">
                    <span>Akses Portal SIKA Unindra</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </section>

        <!-- TAB 3: BIAYA PERKULIAHAN (Frameless) -->
        <section x-show="activeTab === 'biaya'" x-transition class="space-y-8">
            <div class="border-b border-slate-200 pb-6">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">{{ $akademisData['biaya']['title'] ?? 'Biaya Perkuliahan' }}</h2>
                <p class="text-slate-500 text-sm mt-1">{{ $akademisData['biaya']['description'] ?? '' }}</p>
            </div>

            <div class="overflow-x-auto bg-white rounded-3xl border border-slate-200 p-6 shadow-xs">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-xs font-black uppercase text-slate-400 border-b border-slate-200 pb-3">
                            <th class="py-3 px-4">Kategori Kelas</th>
                            <th class="py-3 px-4">BPP (Tetap)</th>
                            <th class="py-3 px-4">SPP / SKS</th>
                            <th class="py-3 px-4">Catatan Ketentuan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm font-medium text-slate-700">
                        @foreach(($akademisData['biaya']['tables'] ?? []) as $row)
                            <tr class="hover:bg-slate-50">
                                <td class="py-4 px-4 font-bold text-slate-900">{{ $row['kategori'] }}</td>
                                <td class="py-4 px-4 font-bold text-[#334EAC]">{{ $row['bpp'] }}</td>
                                <td class="py-4 px-4">{{ $row['spp_per_sks'] }}</td>
                                <td class="py-4 px-4 text-xs text-slate-500">{{ $row['catatan'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-5 rounded-2xl bg-blue-50/60 border border-blue-100 text-xs text-blue-900 space-y-1">
                <span class="font-bold">Info Metode Pembayaran:</span>
                <p>{{ $akademisData['biaya']['bank_info']['note'] ?? '' }} ({{ $akademisData['biaya']['bank_info']['bank'] ?? '' }}).</p>
            </div>
        </section>

        <!-- TAB 4: ATURAN UJIAN (Frameless) -->
        <section x-show="activeTab === 'ujian'" x-transition class="space-y-6">
            <div class="border-b border-slate-200 pb-6">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight">{{ $akademisData['ujian']['title'] ?? 'Ketentuan Ujian' }}</h2>
                <p class="text-slate-500 text-sm mt-1">{{ $akademisData['ujian']['description'] ?? '' }}</p>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-xs">
                <ul class="space-y-4">
                    @foreach(($akademisData['ujian']['rules'] ?? []) as $rule)
                        <li class="flex items-start gap-3 text-sm text-slate-700 font-medium">
                            <span class="w-6 h-6 rounded-full bg-blue-100 text-[#334EAC] flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">&check;</span>
                            <span class="leading-relaxed">{{ $rule }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>