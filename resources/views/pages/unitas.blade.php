<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unit Aktivitas Mahasiswa Sistem Informasi Unindra">

    <title>Unitas Sistem Informasi - Unindra</title>

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
        
        <!-- Header & Deskripsi Unitas -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <div class="md:col-span-2 space-y-4">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">ABOUT US</span>
                <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Unitas Sistem Informasi
                </h1>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed text-justify">
                    <strong>Unit Aktivitas Mahasiswa (Unitas)</strong> Sistem Informasi adalah organisasi kemahasiswaan program studi Sistem Informasi Universitas Indraprasta PGRI yang berada di lingkup BEM Fakultas Teknik dan Ilmu Komputer. Pendirian Unitas Sistem Informasi terbentuk pada tanggal 12 Oktober 2024.
                </p>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed text-justify">
                    Unitas merupakan wadah kegiatan yang menampung aspirasi, kreativitas, dan potensi mahasiswa di luar kegiatan akademik. Pendirian Unitas Sistem Informasi (SI) didasarkan pada pentingnya peran Program Studi Sistem Informasi sebagai penghubung antara bidang teknologi dan dunia manajemen bisnis.
                </p>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed text-justify">
                    Dengan semangat kolaborasi, Unitas SI hadir untuk membangun komunitas mahasiswa yang berkompeten dalam teknologi informasi, menjunjung tinggi nilai kekeluargaan, dan aktif berkontribusi terhadap kemajuan fakultas maupun universitas.
                </p>
            </div>
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset('images/logo-unitas-si.png') }}" alt="Logo Unitas SI" class="w-56 h-auto object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Logo+Unitas+SI'">
            </div>
        </section>

        <!-- Visi & Misi Unitas Section -->
        <section class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-8">
            <!-- Visi -->
            <div class="text-center space-y-3 pb-6 border-b border-slate-200">
                <h2 class="text-xl md:text-2xl font-extrabold text-slate-900">Visi</h2>
                <p class="text-sm text-slate-600 max-w-3xl mx-auto italic">
                    Menjadi unit aktivitas mahasiswa Sistem Informasi yang berkualitas, inovatif, dan berdaya saing dalam bidang sistem informasi dan teknologi informasi, serta mampu memberikan manfaat bagi mahasiswa, almamater, masyarakat luas.
                </p>
            </div>

            <!-- Misi -->
            <div class="space-y-3">
                <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 text-center">Misi</h2>
                <ol class="list-decimal list-inside text-sm text-slate-600 space-y-2 max-w-4xl mx-auto leading-relaxed">
                    <li>Mengembangkan program kerja yang memfasilitasi kreativitas dan inovasi mahasiswa dalam bidang teknologi informasi.</li>
                    <li>Menyelenggarakan kegiatan kompetisi, seminar, dan workshop yang meningkatkan pengetahuan dan keterampilan mahasiswa dalam sistem informasi.</li>
                    <li>Menyelenggarakan kegiatan kerjasama dengan perusahaan di bidang teknologi.</li>
                    <li>Membangun budaya kekeluargaan dan solidaritas di dalam keluarga mahasiswa Sistem Informasi.</li>
                </ol>
            </div>
        </section>

        <!-- SECTION MAKNA LOGO INTERAKTIF (LARGE & EXTRA PRESISI) -->
        <section class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xl space-y-10 relative overflow-hidden" 
                 x-data="{ activePart: null }">
            
            <div class="text-center space-y-2">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">
                    Makna Logo Unitas Sistem Informasi
                </h2>
                <p class="text-slate-500 text-sm max-w-xl mx-auto font-medium">
                    Arahkan kursor ke kartu elemen di bawah untuk melihat detail filosofinya.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <!-- KOLOM KIRI (2 ELEMEN) -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- 1. Simbol <> -->
                    <div @mouseenter="activePart = 'code'" 
                         @mouseleave="activePart = null"
                         :class="activePart === 'code' ? 'bg-[#334EAC] text-white shadow-2xl -translate-y-1.5' : 'bg-slate-50 text-slate-800 border-slate-200 hover:border-blue-400 hover:shadow-md'"
                         class="p-6 rounded-3xl border-2 transition-all duration-300 cursor-pointer flex items-center gap-6 group">
                        
                        <div class="w-20 h-20 md:w-28 md:h-28 shrink-0 rounded-2xl p-1.5 flex items-center justify-center transition-transform duration-300 group-hover:scale-105"
                             :class="activePart === 'code' ? 'bg-white/20' : 'bg-white border-2 border-slate-200 shadow-sm'">
                            <img src="{{ asset('images/logo-parts/simbol-code.png') }}" alt="Simbol Code" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=%3C%3E'">
                        </div>
                        
                        <div class="space-y-1">
                            <h3 class="text-base font-extrabold uppercase tracking-wide" :class="activePart === 'code' ? 'text-white' : 'text-slate-900'">SIMBOL &lt;&gt;</h3>
                            <p class="text-xs leading-relaxed" :class="activePart === 'code' ? 'text-blue-100' : 'text-slate-600'">
                                Menjadi Simbol Pion menunjukkan identitas utama mahasiswa Sistem Informasi yang fokus di perkembangan Teknologi Informasi.
                            </p>
                        </div>
                    </div>

                    <!-- 2. Garis Sambung / -->
                    <div @mouseenter="activePart = 'slash'" 
                         @mouseleave="activePart = null"
                         :class="activePart === 'slash' ? 'bg-[#334EAC] text-white shadow-2xl -translate-y-1.5' : 'bg-slate-50 text-slate-800 border-slate-200 hover:border-blue-400 hover:shadow-md'"
                         class="p-6 rounded-3xl border-2 transition-all duration-300 cursor-pointer flex items-center gap-6 group">
                        
                        <div class="w-20 h-20 md:w-28 md:h-28 shrink-0 rounded-2xl p-1.5 flex items-center justify-center transition-transform duration-300 group-hover:scale-105"
                             :class="activePart === 'slash' ? 'bg-white/20' : 'bg-white border-2 border-slate-200 shadow-sm'">
                            <img src="{{ asset('images/logo-parts/simbol-slash.png') }}" alt="Garis Sambung" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=/'">
                        </div>
                        
                        <div class="space-y-1">
                            <h3 class="text-base font-extrabold uppercase tracking-wide" :class="activePart === 'slash' ? 'text-white' : 'text-slate-900'">SIMBOL / GARIS SAMBUNG</h3>
                            <p class="text-xs leading-relaxed" :class="activePart === 'slash' ? 'text-blue-100' : 'text-slate-600'">
                                Melambangkan konektivitas keseluruhan Pengurus Unitas SI. Mengingatkan prinsip anggota yang selalu tumbuh dan berkembang.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- KOLOM TENGAH: LOGO SHOWCASE CLEAN -->
                <div class="lg:col-span-4 flex items-center justify-center py-4">
                    <div class="relative w-72 h-72 md:w-80 md:h-80 flex items-center justify-center p-6 rounded-3xl transition-all duration-500"
                         :class="activePart !== null ? 'bg-blue-50/80 shadow-2xl scale-105' : 'bg-slate-50'">
                        
                        <img src="{{ asset('images/logo-parts/logo-full.png') }}" 
                             alt="Logo Unitas SI" 
                             :class="{
                                'scale-110 filter drop-shadow-[0_15px_25px_rgba(51,78,172,0.3)]': activePart !== null,
                                'scale-100 opacity-90': activePart === null
                             }"
                             class="w-full h-full object-contain transition-all duration-500 ease-out"
                             onerror="this.src='https://placehold.co/350x350/334EAC/FFF?text=Logo+Unitas+SI'">
                    </div>
                </div>

                <!-- KOLOM KANAN (2 ELEMEN) -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- 3. Nyala Api -->
                    <div @mouseenter="activePart = 'fire'" 
                         @mouseleave="activePart = null"
                         :class="activePart === 'fire' ? 'bg-[#334EAC] text-white shadow-2xl -translate-y-1.5' : 'bg-slate-50 text-slate-800 border-slate-200 hover:border-blue-400 hover:shadow-md'"
                         class="p-6 rounded-3xl border-2 transition-all duration-300 cursor-pointer flex items-center gap-6 group">
                        
                        <div class="w-20 h-20 md:w-28 md:h-28 shrink-0 rounded-2xl p-1.5 flex items-center justify-center transition-transform duration-300 group-hover:scale-105"
                             :class="activePart === 'fire' ? 'bg-white/20' : 'bg-white border-2 border-slate-200 shadow-sm'">
                            <img src="{{ asset('images/logo-parts/simbol-api.png') }}" alt="3 Nyala Api" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Api'">
                        </div>
                        
                        <div class="space-y-1">
                            <h3 class="text-base font-extrabold uppercase tracking-wide" :class="activePart === 'fire' ? 'text-white' : 'text-slate-900'">SIMBOL 3 NYALA API</h3>
                            <p class="text-xs leading-relaxed" :class="activePart === 'fire' ? 'text-blue-100' : 'text-slate-600'">
                                Semangat dan inspirasi, melambangkan semangat menyala terang untuk selalu memegang teguh Tri Dharma Perguruan Tinggi.
                            </p>
                        </div>
                    </div>

                    <!-- 4. Lingkaran -->
                    <div @mouseenter="activePart = 'circle'" 
                         @mouseleave="activePart = null"
                         :class="activePart === 'circle' ? 'bg-[#334EAC] text-white shadow-2xl -translate-y-1.5' : 'bg-slate-50 text-slate-800 border-slate-200 hover:border-blue-400 hover:shadow-md'"
                         class="p-6 rounded-3xl border-2 transition-all duration-300 cursor-pointer flex items-center gap-6 group">
                        
                        <div class="w-20 h-20 md:w-28 md:h-28 shrink-0 rounded-2xl p-1.5 flex items-center justify-center transition-transform duration-300 group-hover:scale-105"
                             :class="activePart === 'circle' ? 'bg-white/20' : 'bg-white border-2 border-slate-200 shadow-sm'">
                            <img src="{{ asset('images/logo-parts/simbol-lingkaran.png') }}" alt="Lingkaran" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Lingkaran'">
                        </div>
                        
                        <div class="space-y-1">
                            <h3 class="text-base font-extrabold uppercase tracking-wide" :class="activePart === 'circle' ? 'text-white' : 'text-slate-900'">SIMBOL LINGKARAN</h3>
                            <p class="text-xs leading-relaxed" :class="activePart === 'circle' ? 'text-blue-100' : 'text-slate-600'">
                                Melambangkan kekeluargaan yang tidak terputus dan berkesinambungan tanpa ada ujungnya.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ELEMEN BAWAH: WARNA BIRU (DUA GAMBAR WARNA BIRU SIDE-BY-SIDE) -->
            <div @mouseenter="activePart = 'blue'" 
                 @mouseleave="activePart = null"
                 :class="activePart === 'blue' ? 'bg-[#334EAC] text-white shadow-2xl -translate-y-1.5' : 'bg-slate-50 text-slate-800 border-slate-200 hover:border-blue-400 hover:shadow-md'"
                 class="p-6 md:p-7 rounded-3xl border-2 transition-all duration-300 cursor-pointer flex flex-col md:flex-row items-center gap-6 group">
                
                <!-- CONTAINER 2 GAMBAR SIMBOL WARNA -->
                <div class="flex items-center gap-3 shrink-0">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl p-1.5 flex items-center justify-center transition-transform duration-300 group-hover:scale-105"
                         :class="activePart === 'blue' ? 'bg-white/20' : 'bg-white border-2 border-slate-200 shadow-sm'">
                        <img src="{{ asset('images/logo-parts/simbol-warna1.png') }}" alt="Warna Biru Tua" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Biru+1'">
                    </div>
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl p-1.5 flex items-center justify-center transition-transform duration-300 group-hover:scale-105"
                         :class="activePart === 'blue' ? 'bg-white/20' : 'bg-white border-2 border-slate-200 shadow-sm'">
                        <img src="{{ asset('images/logo-parts/simbol-warna2.png') }}" alt="Warna Biru Muda" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/0284C7/FFF?text=Biru+2'">
                    </div>
                </div>

                <div class="space-y-1 text-center md:text-left flex-1">
                    <h3 class="text-base font-extrabold uppercase tracking-wide" :class="activePart === 'blue' ? 'text-white' : 'text-slate-900'">WARNA BIRU</h3>
                    <p class="text-xs md:text-sm leading-relaxed" :class="activePart === 'blue' ? 'text-blue-100' : 'text-slate-600'">
                        Melambangkan kepercayaan dan profesionalisme beretika di dalam setiap aktivitas Unitas Sistem Informasi kedepannya.
                    </p>
                </div>
            </div>

        </section>

        <!-- CTA Box Pengurus UNITAS -->
        <section class="flex justify-center">
            <div class="bg-slate-100/80 rounded-3xl p-8 md:p-12 border border-slate-200 text-center max-w-2xl w-full space-y-4 shadow-xs">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">
                    Ingin Mengenal Pengurus UNITAS?
                </h2>
                <p class="text-xs md:text-sm text-slate-500">
                    Lihat struktural organisasi dan kenali para pengurus yang berperan dalam menjalankan berbagai program serta kegiatan UNITAS.
                </p>
                <div class="pt-2">
                    <a href="{{ url('/about/struktural') }}" 
                       class="inline-flex items-center gap-2 bg-[#334EAC] text-white px-6 py-3 rounded-2xl text-xs md:text-sm font-bold shadow-lg shadow-blue-500/20 hover:bg-blue-800 transition-all transform hover:-translate-y-0.5">
                        Lihat Struktural Organisasi &rarr;
                    </a>
                </div>
            </div>
        </section>

        <!-- Image Slider/Graphic Banner Section -->
        <section class="space-y-4">
            <div class="flex justify-center items-center gap-4">
                <button type="button" class="p-2 rounded-full border border-slate-300 hover:bg-slate-200 transition-colors">
                    &larr;
                </button>
                <img src="{{ asset('images/banner-unitas-prodi.png') }}" alt="Banner Graphic" class="w-full max-w-4xl h-auto rounded-3xl object-cover shadow-sm" onerror="this.src='https://placehold.co/800x400/334EAC/FFF?text=Banner+Graphic+UNITAS'">
                <button type="button" class="p-2 rounded-full border border-slate-300 hover:bg-slate-200 transition-colors">
                    &rarr;
                </button>
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>