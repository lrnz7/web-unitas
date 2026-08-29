<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Program Studi Sistem Informasi Universitas Indraprasta PGRI">

    <title>Program Studi Sistem Informasi - Universitas Indraprasta PGRI</title>

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

    <main class="flex-1 py-12 px-6 max-w-7xl mx-auto w-full space-y-16">
        
        <!-- Header & Deskripsi Prodi -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <div class="md:col-span-2 space-y-4">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">ABOUT US</span>
                <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Program Studi Sistem Informasi
                </h1>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed text-justify">
                    Program studi Sistem Informasi Universitas Indraprasta PGRI berdiri pada tahun 2023 berdasarkan Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor : 411/E/O/2023 tanggal 16 Mei 2023 tentang izin Pembukaan Program Studi Sistem Informasi Program Sarjana pada Indraprasta PGRI di Jakarta. Berdasarkan keputusan tersebut, Program Studi Sistem Informasi dinyatakan telah memenuhi persyaratan akreditasi minimum.
                </p>
            </div>
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('images/logo-prodi-si.png') }}" alt="Logo Prodi SI" class="w-64 md:w-72 h-auto object-contain drop-shadow-md" onerror="this.src='https://placehold.co/250x250/334EAC/FFF?text=Logo+Prodi+SI'">
            </div>
        </section>

        <!-- Visi, Misi & Tujuan Section -->
        <section class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-8">
            <!-- Visi -->
            <div class="text-center space-y-3 pb-6 border-b border-slate-200">
                <h2 class="text-xl md:text-2xl font-extrabold text-slate-900">Visi</h2>
                <p class="text-sm text-slate-600 max-w-3xl mx-auto italic">
                    Mengembangkan keilmuan Sistem Informasi yang unggul di bidang Business Intelligence dan Artificial Intelligence (AI) yang berlandaskan pada peduli, mandiri, kreatif dan adaptif.
                </p>
            </div>

            <!-- Misi -->
            <div class="space-y-3 pb-6 border-b border-slate-200">
                <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 text-center">Misi</h2>
                <ol class="list-decimal list-inside text-sm text-slate-600 space-y-2 max-w-4xl mx-auto leading-relaxed">
                    <li>Menyelenggarakan pendidikan dan pengajaran yang profesional dibidang sistem informasi dan business intelligence.</li>
                    <li>Melaksanakan kegiatan penelitian dan kajian inovatif dalam pengembangan Sistem Informasi.</li>
                    <li>Melaksanakan kegiatan pengabdian kepada masyarakat dan kerjasama di bidang Sistem Informasi yang dapat memenuhi kepentingan masyarakat (stakeholders).</li>
                </ol>
            </div>

            <!-- Tujuan -->
            <div class="space-y-3">
                <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 text-center">Tujuan</h2>
                <ol class="list-decimal list-inside text-sm text-slate-600 space-y-2 max-w-4xl mx-auto leading-relaxed">
                    <li>Menghasilkan lulusan sarjana sistem informasi yang profesional.</li>
                    <li>Menghasilkan karya ilmiah dan penelitian dalam bidang sistem informasi.</li>
                    <li>Menghasilkan solusi pemecahan masalah yang dihadapi masyarakat.</li>
                </ol>
            </div>
        </section>

        <!-- KURIKULUM INTERAKTIF SECTION (CLEAN FULL TEXT) -->
        <section class="space-y-8" x-data="{ activeSemester: null }">
            
            <div class="border-b border-slate-200/80 pb-6">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">
                    Kurikulum Jurusan Sistem Informasi
                </h2>
                <p class="text-slate-500 text-xs md:text-sm font-medium mt-1">
                    Struktur distribusi mata kuliah per semester beserta komponen SKS akademik.
                </p>
            </div>

            <!-- GRID KURIKULUM SEMESTER 1-8 -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                @foreach($curriculum as $sem)
                    @php
                        $totalSksSemester = collect($sem['courses'])->sum('total_sks');
                    @endphp
                    
                    <!-- CARD SEMESTER -->
                    <div @mouseenter="activeSemester = {{ $sem['semester'] }}"
                         @mouseleave="activeSemester = null"
                         :class="activeSemester === {{ $sem['semester'] }} ? 'border-[#334EAC] shadow-2xl shadow-blue-500/20 -translate-y-2 bg-white ring-2 ring-blue-300' : 'border-slate-200/80 bg-white shadow-xs hover:border-blue-300'"
                         class="rounded-3xl border-2 transition-all duration-300 overflow-hidden flex flex-col justify-between group">
                        
                        <!-- Header Card Semester -->
                        <div class="px-7 py-5 flex items-center justify-between border-b transition-colors duration-300"
                             :class="activeSemester === {{ $sem['semester'] }} ? 'bg-[#334EAC] text-white border-blue-600' : 'bg-slate-50 text-slate-900 border-slate-100'">
                            
                            <h3 class="text-lg font-black tracking-tight uppercase">
                                Semester {{ $sem['semester'] }}
                            </h3>
                            
                            <span class="text-xs font-extrabold px-3.5 py-1.5 rounded-full transition-colors"
                                  :class="activeSemester === {{ $sem['semester'] }} ? 'bg-white/20 text-white' : 'bg-blue-50 text-[#334EAC] border border-blue-100'">
                                {{ $totalSksSemester }} Total SKS
                            </span>
                        </div>

                        <!-- Tabel Mata Kuliah Tanpa Singkatan -->
                        <div class="p-5 overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="text-[11px] font-black uppercase text-slate-400 border-b border-slate-100 pb-2">
                                        <th class="py-2.5 px-3">Kode</th>
                                        <th class="py-2.5 px-3">Mata Kuliah</th>
                                        <th class="py-2.5 px-3 text-center">Komponen SKS</th>
                                        <th class="py-2.5 px-3 text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-xs">
                                    @foreach($sem['courses'] as $course)
                                        <tr class="hover:bg-blue-50/90 transition-all duration-200 group/row cursor-default">
                                            
                                            <!-- Kode Matkul -->
                                            <td class="py-3.5 px-3 font-mono font-bold text-slate-400 group-hover/row:text-[#334EAC] transition-colors">
                                                {{ $course['code'] }}
                                            </td>

                                            <!-- Nama Matkul -->
                                            <td class="py-3.5 px-3 font-bold text-slate-800 group-hover/row:text-[#334EAC] transition-colors">
                                                {{ $course['name'] }}
                                            </td>

                                            <!-- Komponen SKS FULL TEKS TANPA SINGKATAN -->
                                            <td class="py-3.5 px-3 text-center">
                                                <div class="flex flex-wrap items-center justify-center gap-1.5">
                                                    @if($course['teori'] > 0)
                                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-blue-50 text-blue-700 border border-blue-200/60 whitespace-nowrap">
                                                            {{ $course['teori'] }} SKS Teori
                                                        </span>
                                                    @endif

                                                    @if($course['praktikum'] > 0)
                                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200/60 whitespace-nowrap">
                                                            {{ $course['praktikum'] }} SKS Praktikum
                                                        </span>
                                                    @endif

                                                    @if($course['praktek'] > 0)
                                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200/60 whitespace-nowrap">
                                                            {{ $course['praktek'] }} SKS Praktek
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>

                                            <!-- Total SKS Badge -->
                                            <td class="py-3.5 px-3 text-center">
                                                <span class="inline-flex items-center justify-center w-7 h-7 rounded-xl font-black text-xs bg-slate-100 text-slate-700 group-hover/row:bg-[#334EAC] group-hover/row:text-white transition-all transform group-hover/row:scale-110 shadow-2xs">
                                                    {{ $course['total_sks'] }}
                                                </span>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                @endforeach
            </div>
        </section>

        <!-- CTA Download / Pendaftaran -->
        <section class="text-center py-8 space-y-4">
            <h2 class="text-xl md:text-3xl font-extrabold text-slate-900 leading-snug">
                Tertarik menjadi mahasiswa baru Program Studi Sistem Informasi? <br>
                Download informasi dan formulir pendaftarannya 
                <a href="#" class="text-[#334EAC] underline hover:text-blue-800 transition-colors">DISINI</a> !
            </h2>
        </section>

        <!-- Graphic Banner Bottom -->
        <div class="flex justify-center">
            <img src="{{ asset('images/banner-unitas-prodi.png') }}" alt="Banner Unitas & Prodi" class="w-full max-w-4xl h-auto rounded-3xl object-cover shadow-md" onerror="this.src='https://placehold.co/800x300/334EAC/FFF?text=Banner+Unindra+SI'">
        </div>

    </main>

    <x-footer />

</body>
</html>