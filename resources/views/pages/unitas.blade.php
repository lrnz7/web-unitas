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
        
<!-- Section Utama Profil & Narasi Organisasi (Pro Typography Spacing Fix) -->
<section class="py-20 bg-transparent">
    <div class="max-w-6xl mx-auto px-6">
        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">ABOUT US</span>
        
        {{-- 1. Hero / About Us --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Kolom Kiri: Teks Naratif -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        Unitas Sistem Informasi
                    </h1>
                </div>
                <div class="flex flex-col gap-5 text-sm md:text-base text-slate-600 leading-relaxed text-justify">
                    <p>
                        <strong>Unit Aktivitas Mahasiswa (Unitas)</strong> Sistem Informasi adalah organisasi kemahasiswaan program studi Sistem Informasi Universitas Indraprasta PGRI yang berada di lingkup BEM Fakultas Teknik dan Ilmu Komputer. Unitas Sistem Informasi terbentuk pada tanggal 12 Oktober 2024.
                    </p>
                    <p>
                        Unitas merupakan wadah kegiatan yang menampung aspirasi, kreativitas, dan potensi mahasiswa di luar kegiatan akademik. Pendirian Unitas Sistem Informasi (SI) didasarkan pada pentingnya peran Program Studi Sistem Informasi sebagai penghubung antara bidang teknologi dan dunia manajemen bisnis.
                    </p>
                    <p>
                        Dengan semangat kolaborasi, Unitas SI hadir untuk membangun komunitas mahasiswa yang berkompeten dalam teknologi informasi, menjunjung tinggi nilai kekeluargaan, dan aktif berkontribusi terhadap kemajuan fakultas maupun universitas.
                    </p>
                </div>
            </div>

            <!-- Kolom Kanan: Logo -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <img src="{{ asset('images/logo-unitas-si.png') }}" alt="Logo Unitas SI" class="w-64 h-64 md:w-80 md:h-80 object-contain">
            </div>
        </div>

        {{-- 2. Our Story --}}
        <div class="max-w-5xl">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight mt-16">Jejak Perjalanan & Fondasi Organisasi</h2>
            <div class="flex flex-col gap-3 mt-4">
                <p class="text-slate-600 leading-relaxed text-justify">
                    Perjalanan Unitas SI berakar dari ketiadaan wadah khusus bagi mahasiswa Sistem Informasi FTIK Unindra untuk mengembangkan aspek akademik, kepemimpinan, dan kompetensi di luar ruang kuliah sejak prodi ini berdiri pada tahun 2023. Gagasan tersebut mulai dirintis melalui forum pertemuan dan pelatihan dasar mahasiswa pada awal tahun 2024.
                </p>
                <p class="text-slate-600 leading-relaxed text-justify">
                    Pada fase awalnya, organisasi ini sempat melewati masa perintisan dan penyesuaian di tengah dinamika internal serta tantangan legalitas. Melalui evaluasi bersama pihak fakultas, kepengurusan resmi yang sah secara administratif akhirnya terbentuk dan memulai fase tata kelola yang lebih terstruktur.
                </p>
            </div>
        </div>

        {{-- 3. Core Statement --}}
        <div class="max-w-5xl">
            <div class="mt-16 pt-4">
                <p class="text-2xl md:text-3xl font-bold text-slate-900 leading-snug tracking-tight">
                    "Kami hadir untuk menjawab kebutuhan nyata mahasiswa Program Studi Sistem Informasi yang menginginkan ruang tumbuh di luar batasan kurikulum formal."
                </p>
            </div>
            <p class="text-slate-600 leading-relaxed text-justify mt-4">
                Organisasi ini hadir untuk menampung dahaga mahasiswa akan tempat belajar berorganisasi, mengasah hard skill teknologi, serta memperkuat mental kepemimpinan dan solidaritas kekeluargaan di lingkungan kampus.
            </p>
        </div>

        {{-- 4. What We Do --}}
        <div>
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight mt-16 mb-6">Pilar Utama Kegiatan</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-3 cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <span class="text-sm font-black text-slate-300 group-hover:text-[#334EAC] transition-colors relative z-10">01</span>
                    <h5 class="font-bold text-slate-900 text-lg leading-tight relative z-10">Pengembangan Akademik</h5>
                    <p class="text-sm text-slate-500 leading-relaxed relative z-10">Menginisiasi kegiatan kokurikuler, pelatihan teknologi, workshop, hingga kompetisi keilmuan sistem informasi.</p>
                </div>
                <!-- Card 2 -->
                <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-3 cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <span class="text-sm font-black text-slate-300 group-hover:text-[#334EAC] transition-colors relative z-10">02</span>
                    <h5 class="font-bold text-slate-900 text-lg leading-tight relative z-10">Kepemimpinan & Organisasi</h5>
                    <p class="text-sm text-slate-500 leading-relaxed relative z-10">Menjalankan kaderisasi berjenjang yang disiplin, birokrasi, serta membentuk mental pengurus yang akuntabel.</p>
                </div>
                <!-- Card 3 -->
                <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-3 cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <span class="text-sm font-black text-slate-300 group-hover:text-[#334EAC] transition-colors relative z-10">03</span>
                    <h5 class="font-bold text-slate-900 text-lg leading-tight relative z-10">Kreativitas & Kolaborasi</h5>
                    <p class="text-sm text-slate-500 leading-relaxed relative z-10">Mengelola arus informasi, publikasi kreatif, kemitraan strategis, hingga unit kewirausahaan mandiri.</p>
                </div>
                <!-- Card 4 -->
                <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-3 cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <span class="text-sm font-black text-slate-300 group-hover:text-[#334EAC] transition-colors relative z-10">04</span>
                    <h5 class="font-bold text-slate-900 text-lg leading-tight relative z-10">Pengabdian Masyarakat</h5>
                    <p class="text-sm text-slate-500 leading-relaxed relative z-10">Merealisasikan Tridharma Perguruan Tinggi melalui aksi sosial dan kontribusi nyata kepada masyarakat.</p>
                </div>
            </div>
        </div>

        {{-- 5. Values --}}
        <div>
            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mt-16 mb-6">Budaya & Nilai Organisasi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="relative overflow-hidden p-5 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] flex flex-col gap-1 group cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <h5 class="font-bold text-slate-900 group-hover:text-[#334EAC] transition-colors relative z-10">Kekeluargaan</h5>
                    <p class="text-sm text-slate-500 relative z-10">Satu kesatuan yang saling menopang tanpa sekat pemisah.</p>
                </div>
                <div class="relative overflow-hidden p-5 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] flex flex-col gap-1 group cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <h5 class="font-bold text-slate-900 group-hover:text-[#334EAC] transition-colors relative z-10">Profesionalitas</h5>
                    <p class="text-sm text-slate-500 relative z-10">Berlandaskan etika kerja yang disiplin dan transparan.</p>
                </div>
                <div class="relative overflow-hidden p-5 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] flex flex-col gap-1 group cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <h5 class="font-bold text-slate-900 group-hover:text-[#334EAC] transition-colors relative z-10">Kritis & Inovatif</h5>
                    <p class="text-sm text-slate-500 relative z-10">Berpikir analitis dan mencari solusi berbasis teknologi.</p>
                </div>
                <div class="relative overflow-hidden p-5 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] flex flex-col gap-1 group cursor-default">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                    <h5 class="font-bold text-slate-900 group-hover:text-[#334EAC] transition-colors relative z-10">Integritas</h5>
                    <p class="text-sm text-slate-500 relative z-10">Menjunjung tinggi komitmen moral dan tindakan nyata.</p>
                </div>
            </div>
        </div>

        {{-- 6. Our Direction --}}
        <div class="max-w-5xl">
            <h2 class="text-xl md:text-2xl font-bold text-slate-900 tracking-tight mt-16 mb-4">Arah Pengembangan & Masa Depan</h2>
            <p class="text-sm text-slate-600 leading-relaxed text-justify mb-10">
                Arah pengembangan Unitas SI dirancang agar selalu adaptif terhadap perkembangan zaman tanpa kehilangan akar identitasnya. Organisasi ini bergerak menuju tata kelola berkelanjutan melalui evaluasi berkala—mulai dari monitoring bulanan hingga musyawarah tahunan—guna memastikan regenerasi pengurus membawa peningkatan kualitas progresif.
            </p>
        </div>

{{-- 7. VISI & MISI UNITAS SI (FIXED PRECISE FORMAT) --}}
        <div class="max-w-5xl space-y-8 pt-6 border-t border-slate-200">
            <div>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900 tracking-tight mb-3">Visi</h2>
                <p class="text-sm md:text-base text-slate-600 leading-relaxed text-justify font-medium">
                    Menjadi unit aktivitas mahasiswa sistem informasi yang berkualitas, inovatif, dan berdaya saing dalam bidang sistem informasi dan teknologi informasi, serta mampu memberikan manfaat bagi mahasiswa, alumni, dan masyarakat luas.
                </p>
            </div>

            <div>
                <h2 class="text-xl md:text-2xl font-bold text-slate-900 tracking-tight mb-4">Misi</h2>
                <ol class="space-y-3 text-sm md:text-base text-slate-600 leading-relaxed list-decimal list-inside font-medium">
                    <li class="text-justify pl-1">
                        Mengembangkan program kerja yang memfasilitasi kreativitas dan inovasi mahasiswa dalam bidang teknologi informasi.
                    </li>
                    <li class="text-justify pl-1">
                        Menyelenggarakan kegiatan kompetisi, seminar, dan workshop yang meningkatkan pengetahuan dan keterampilan mahasiswa dalam sistem informasi.
                    </li>
                    <li class="text-justify pl-1">
                        Menyelenggarakan kegiatan kerja sama dengan perusahaan di bidang teknologi.
                    </li>
                    <li class="text-justify pl-1">
                        Membangun budaya kekeluargaan dan solidaritas di dalam keluarga mahasiswa Sistem Informasi.
                    </li>
                </ol>
            </div>
        </div>
</section>

<!-- SECTION MAKNA LOGO INTERAKTIF (PRECISE HOVER & SYNC GLOW) -->
        <section class="mt-20 space-y-12" x-data="{ activePart: null }">
            
            <!-- Judul Seksi -->
            <div class="max-w-xl">
                <h2 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Logo Philosophy</h2>
                <h3 class="text-3xl font-extrabold text-slate-900 tracking-tight mt-1">
                    Makna & Filosofi Identitas Unitas SI
                </h3>
            </div>

            <!-- Grid Konten -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <!-- KOLOM KIRI (2 ELEMEN) -->
                <div class="lg:col-span-4 flex flex-col gap-5">
                    <!-- 1. Simbol <> -->
                    <div @mouseenter="activePart = 'code'" 
                         @mouseleave="activePart = null"
                         class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group cursor-default flex items-center gap-5">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                        
                        <div class="w-20 h-20 shrink-0 rounded-xl p-1.5 bg-slate-50 border border-slate-200 flex items-center justify-center transition-transform duration-300 group-hover:scale-105 relative z-10">
                            <img src="{{ asset('images/logo-parts/simbol-code.png') }}" alt="Simbol Code" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=%3C%3E'">
                        </div>
                        
                        <div class="space-y-1 relative z-10">
                            <h4 class="text-sm font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors uppercase tracking-wide">Simbol &lt;&gt;</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Menjadi simbol identitas utama mahasiswa Sistem Informasi yang fokus di bidang teknologi informasi.
                            </p>
                        </div>
                    </div>

                    <!-- 2. Garis Sambung / -->
                    <div @mouseenter="activePart = 'slash'" 
                         @mouseleave="activePart = null"
                         class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group cursor-default flex items-center gap-5">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                        
                        <div class="w-20 h-20 shrink-0 rounded-xl p-1.5 bg-slate-50 border border-slate-200 flex items-center justify-center transition-transform duration-300 group-hover:scale-105 relative z-10">
                            <img src="{{ asset('images/logo-parts/simbol-slash.png') }}" alt="Garis Sambung" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=/'">
                        </div>
                        
                        <div class="space-y-1 relative z-10">
                            <h4 class="text-sm font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors uppercase tracking-wide">Garis Sambung /</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Melambangkan konektivitas dan prinsip anggota yang selalu tumbuh serta berkembang.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- KOLOM TENGAH: LOGO SHOWCASE (SYNC ZOOM) -->
                <div class="lg:col-span-4 flex items-center justify-center py-4">
                    <div class="relative w-72 h-72 md:w-80 md:h-80 flex items-center justify-center p-6 rounded-3xl transition-all duration-500"
                         :class="activePart !== null ? 'bg-blue-50/60 shadow-xl scale-105' : 'bg-transparent'">
                        
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
                <div class="lg:col-span-4 flex flex-col gap-5">
                    <!-- 3. Nyala Api -->
                    <div @mouseenter="activePart = 'fire'" 
                         @mouseleave="activePart = null"
                         class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group cursor-default flex items-center gap-5">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                        
                        <div class="w-20 h-20 shrink-0 rounded-xl p-1.5 bg-slate-50 border border-slate-200 flex items-center justify-center transition-transform duration-300 group-hover:scale-105 relative z-10">
                            <img src="{{ asset('images/logo-parts/simbol-api.png') }}" alt="3 Nyala Api" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Api'">
                        </div>
                        
                        <div class="space-y-1 relative z-10">
                            <h4 class="text-sm font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors uppercase tracking-wide">3 Nyala Api</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Menyala terang sebagai simbol semangat memegang teguh Tri Dharma Perguruan Tinggi.
                            </p>
                        </div>
                    </div>

                    <!-- 4. Lingkaran -->
                    <div @mouseenter="activePart = 'circle'" 
                         @mouseleave="activePart = null"
                         class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group cursor-default flex items-center gap-5">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                        
                        <div class="w-20 h-20 shrink-0 rounded-xl p-1.5 bg-slate-50 border border-slate-200 flex items-center justify-center transition-transform duration-300 group-hover:scale-105 relative z-10">
                            <img src="{{ asset('images/logo-parts/simbol-lingkaran.png') }}" alt="Lingkaran" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Lingkaran'">
                        </div>
                        
                        <div class="space-y-1 relative z-10">
                            <h4 class="text-sm font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors uppercase tracking-wide">Simbol Lingkaran</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Melambangkan kekeluargaan yang tidak terputus dan berkesinambungan tanpa ujung.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ELEMEN BAWAH: WARNA BIRU (FULL WIDTH) -->
            <div @mouseenter="activePart = 'blue'" 
                 @mouseleave="activePart = null"
                 class="relative overflow-hidden p-6 md:p-8 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group cursor-default flex flex-col md:flex-row items-center gap-6">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>

                <div class="flex items-center gap-3 shrink-0 relative z-10">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-xl p-1.5 bg-slate-50 border border-slate-200 flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('images/logo-parts/simbol-warna1.png') }}" alt="Warna Biru Tua" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/334EAC/FFF?text=Biru+1'">
                    </div>
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-xl p-1.5 bg-slate-50 border border-slate-200 flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('images/logo-parts/simbol-warna2.png') }}" alt="Warna Biru Muda" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/200x200/0284C7/FFF?text=Biru+2'">
                    </div>
                </div>

                <div class="space-y-1 text-center md:text-left flex-1 relative z-10">
                    <h4 class="text-sm font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors uppercase tracking-wide">Warna Biru (Gradasi & Identitas)</h4>
                    <p class="text-xs md:text-sm text-slate-500 leading-relaxed">
                        Melambangkan kepercayaan, loyalitas, dan profesionalisme beretika di dalam setiap aktivitas organisasi Unitas Sistem Informasi.
                    </p>
                </div>
            </div>

        </section>

        <!-- Section Kepengurusan & Statistik Terintegrasi (Frameless & Pro Hover) -->
<section class="py-16 bg-transparent">
    <div class="max-w-6xl mx-auto px-6 space-y-12">
        
        {{-- Header & Title --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-slate-200 pb-6">
            <div>
                <h3 class="text-3xl font-extrabold text-slate-900 tracking-tight mt-1">
                    Kepengurusan Unitas Sistem Informasi Saat Ini
                </h3>
            </div>
            <p class="text-xs md:text-sm text-slate-900 max-w-sm">
                Informasi ringkas mengenai perjalanan dan struktur aktif organisasi periode berjalan.
            </p>
        </div>

        {{-- Stat Grid dengan Efek Hover Kartu Premium --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Stat 1 -->
            <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-2 cursor-default">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest relative z-10">Tahun Berdiri</span>
                <span class="text-3xl font-black text-slate-900 relative z-10">2024</span>
            </div>

            <!-- Stat 2 -->
            <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-2 cursor-default">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest relative z-10">Periode Aktif</span>
                <span class="text-3xl font-black text-[#334EAC] relative z-10">2026/2027</span>
            </div>

            <!-- Stat 3 -->
            <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-2 cursor-default">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest relative z-10">Pengurus Aktif</span>
                <span class="text-3xl font-black text-slate-900 relative z-10">18 <span class="text-base font-semibold text-slate-500">Orang</span></span>
            </div>

            <!-- Stat 4 -->
            <div class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col gap-2 cursor-default">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest relative z-10">Struktur Divisi</span>
                <span class="text-3xl font-black text-slate-900 relative z-10">3 <span class="text-base font-semibold text-slate-500">Divisi</span></span>
            </div>

        </div>

        {{-- Footer CTA dengan Efek Hover Kartu Premium --}}
        <div class="relative overflow-hidden p-6 md:p-8 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 hover:border-[#334EAC] group flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out"></div>

            <div class="relative z-10">
                <h4 class="text-base font-bold text-slate-900">Ingin Mengenal Lebih Dekat Jajaran Pengurus?</h4>
                <p class="text-xs text-slate-500 mt-1">Lihat profil lengkap, divisi, dan tupoksi pengurus aktif di halaman struktural.</p>
            </div>
            
            <a href="{{ url('/about/struktural') }}" 
               class="relative z-10 inline-flex items-center justify-center px-6 py-3 rounded-xl bg-[#334EAC] text-white font-bold text-xs tracking-wider uppercase shadow-sm hover:bg-blue-800 hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 shrink-0">
                Lihat Struktural Organisasi
            </a>
        </div>

    </div>
</section>

    </main>

    <x-footer />

</body>
</html>