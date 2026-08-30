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
        
        <!-- Section Utama Mengikuti Lebar Wrapper Unitas -->
        <section class="py-12 bg-transparent">
            <div class="max-w-6xl mx-auto px-6 space-y-16">
                
                <!-- Hero Section: Narasi Kiri, Logo Kanan -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-7 flex flex-col gap-6">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">ABOUT US</span>
                        <div>
                            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                                Program Studi Sistem Informasi
                            </h1>
                        </div>
                        <p class="text-slate-600 text-sm md:text-base leading-relaxed text-justify font-medium">
                            Program Studi Sistem Informasi Universitas Indraprasta PGRI hadir untuk mencetak teknokrat dan profesional IT masa depan yang menguasai irisan tajam antara teknologi mutakhir dan strategi bisnis global. Berdiri sejak tahun 2023 berdasarkan Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 411/E/O/2023, program studi kami berkomitmen untuk menyediakan pendidikan tinggi berkualitas tinggi yang adaptif terhadap perkembangan era digital.
                        </p>
                    </div>
                    <div class="lg:col-span-5 flex justify-center lg:justify-end">
                        <img src="{{ asset('images/logo-prodi-si.png') }}" alt="Logo Prodi SI" class="w-64 md:w-80 h-auto object-contain drop-shadow-xl" onerror="this.src='https://placehold.co/250x250/334EAC/FFF?text=Logo+Prodi+SI'">
                    </div>
                </div>

                <!-- Versi Naratif Mengalir (Lebar Terkontrol Sama Persis) -->
                <div class="max-w-5xl space-y-5 text-slate-600 text-sm md:text-base leading-relaxed text-justify font-medium">
                    <p>
                        Sebagai salah satu pilihan utama bagi calon mahasiswa di wilayah Jakarta, Unindra dikenal luas sebagai kampus swasta dengan biaya kuliah paling terjangkau dan ramah di kantong. Meskipun menawarkan biaya yang sangat ekonomis, kualitas fasilitas yang diberikan tidak main-main. Seluruh kegiatan perkuliahan didukung oleh gedung milik sendiri yang representatif serta ruangan kelas yang sudah <strong>full AC</strong>, menciptakan suasana belajar yang nyaman, kondusif, dan fokus tanpa membuat beban finansial mahasiswa menjadi berat.
                    </p>
                    <p>
                        Dalam mengarahkan arah pengembangannya, Program Studi Sistem Informasi menetapkan <strong>Visi</strong> utama untuk mengembangkan keilmuan yang unggul di bidang <em>Business Intelligence</em> dan <em>Artificial Intelligence (AI)</em>, yang selalu berlandaskan pada nilai peduli, mandiri, kreatif, serta adaptif terhadap kebutuhan industri modern.
                    </p>
                    <p>
                        Untuk mewujudkan visi tersebut, dirumuskan pula <strong>Misi</strong> nyata yang berfokus pada penyelenggaraan pendidikan profesional, pelaksanaan kajian riset inovatif di bidang Sistem Informasi, serta pengabdian masyarakat yang berorientasi pada pemenuhan kebutuhan para pemangku kepentingan <em>(stakeholders)</em>.
                    </p>
                    <p>
                        Lebih dari sekadar mengejar teori di dalam ruang kuliah, mahasiswa juga ditempa melalui ekosistem organisasi kemahasiswaan yang aktif dan produktif seperti <strong>Unitas Sistem Informasi</strong>. Di sinilah ruang kolaborasi nyata, pengembangan proyek coding, dan penempaan mental kepemimpinan diasah secara disiplin guna melahirkan lulusan yang siap bersaing di dunia profesional.
                    </p>
                </div>

                <!-- Bagian Komitmen Penutup -->
                <div class="max-w-4xl mx-auto text-center space-y-4 pt-8 border-t border-slate-200">
                    <h2 class="text-xl md:text-2xl font-bold text-slate-900 tracking-tight">
                        Komitmen Menuju Standar Profesional Tinggi
                    </h2>
                    <p class="text-slate-600 text-xs md:text-sm leading-relaxed font-medium">
                        Melalui penyelenggaraan tridharma perguruan tinggi yang transparan, profesional, serta berorientasi pada riset inovatif dan pengabdian masyarakat, Program Studi Sistem Informasi Unindra siap menghadirkan solusi nyata bagi tantangan teknologi di era modern.
                    </p>
                </div>

                <!-- CTA Pendaftaran -->
                <div class="text-center py-6 space-y-4">
                    <h2 class="text-xl md:text-3xl font-extrabold text-slate-900 leading-snug">
                        Tertarik bergabung dan membangun masa depan bersama Sistem Informasi Unindra? <br>
                        Cek informasi selengkapnya atau akses pusat layanan akademis kami.
                    </h2>
                    <div class="pt-4">
                        <a href="{{ url('/informasi/akademis') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-[#334EAC] text-white font-extrabold text-xs tracking-wider uppercase shadow-md hover:bg-blue-800 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            Lihat Pusat Informasi Akademis &rarr;
                        </a>
                    </div>
                </div>

                <!-- Graphic Banner Bottom -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/banner-unitas-prodi.png') }}" alt="Banner Unitas & Prodi" class="w-full max-w-4xl h-auto rounded-3xl object-cover shadow-md" onerror="this.src='https://placehold.co/800x300/334EAC/FFF?text=Banner+Unindra+SI'">
                </div>

            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>