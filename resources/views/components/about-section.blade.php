@props([
    'data' => null,
])

@php
    if (!$data) {
        $jsonPath = base_path('data/unitas.json');
        $jsonData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    } else {
        $jsonData = $data;
    }

    $about = $jsonData['about'] ?? [
        'label'       => 'ABOUT US',
        'title'       => "Unitas\nSistem\nInformasi",
        'description' => 'Unit Aktivitas Mahasiswa Sistem Informasi merupakan salah satu organisasi yang berada di bawah Fakultas Teknik dan Ilmu Komputer Universitas Indraprasta PGRI. Keberadaannya berfungsi sebagai wadah pengembangan potensi, kreativitas, dan aspirasi mahasiswa, khususnya di lingkup Program Studi Sistem Informasi.',
        'cta_text'    => 'Explore More',
        'cta_url'     => '/#about',
        'logo'        => 'images/logo-unitas.png',
    ];
@endphp

<section id="about"
         class="relative w-full max-w-[1440px] px-6 lg:px-12 py-16 md:py-24 mx-auto overflow-hidden"
         aria-labelledby="about-section-title">

    {{-- Decorative background blobs (left side) --}}
    <div class="absolute -left-32 top-1/2 -translate-y-1/2 w-[420px] h-[420px] bg-gradient-to-r from-[#BAD6EB]/30 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    {{-- 12-column grid: content 7 cols | visual 5 cols --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

        {{-- ───── Left Column: Content (7 cols) ───── --}}
        <div class="lg:col-span-7 flex flex-col">

            {{-- Label --}}
            <span class="text-xs md:text-sm font-bold tracking-widest text-slate-500 uppercase">
                {{ $about['label'] }}
            </span>

            {{-- Main Heading --}}
            <h2 id="about-section-title"
                class="mt-2 text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                @foreach(explode("\n", $about['title']) as $line)
                    {{ $line }}<br>
                @endforeach
            </h2>

            {{-- Description --}}
            <p class="mt-6 text-slate-600 text-sm md:text-base leading-relaxed max-w-xl">
                <strong class="font-semibold text-slate-800">Unit Aktivitas Mahasiswa Sistem Informasi</strong>
                {{ Str::after($about['description'], 'Unit Aktivitas Mahasiswa Sistem Informasi') }}
            </p>

            {{-- ───── PROFIL SINGKAT KEPENGURUSAN ───── --}}
            <div class="mt-8 pt-6 border-t border-slate-200/80 max-w-lg">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-4">
                    Profil Singkat Kepengurusan:
                </span>
                
                <div class="grid grid-cols-3 gap-6">
                    {{-- Kolom 1: Tahun Berdiri --}}
                    <div>
                        <span class="block text-2xl md:text-3xl font-black text-[#334EAC] tracking-tight">2024</span>
                        <span class="text-xs font-semibold text-slate-800 block mt-1">Tahun Berdiri</span>
                        <span class="text-[10px] text-slate-400 font-medium">Awal Perjalanan</span>
                    </div>

                    {{-- Kolom 2: Jumlah Pengurus --}}
                    <div>
                        <span class="block text-2xl md:text-3xl font-black text-[#334EAC] tracking-tight">18</span>
                        <span class="text-xs font-semibold text-slate-800 block mt-1">Pengurus</span>
                        <span class="text-[10px] text-slate-400 font-medium">Anggota Aktif</span>
                    </div>

                    {{-- Kolom 3: Jumlah Divisi --}}
                    <div>
                        <span class="block text-2xl md:text-3xl font-black text-[#334EAC] tracking-tight">03</span>
                        <span class="text-xs font-semibold text-slate-800 block mt-1">Divisi</span>
                        <span class="text-[10px] text-slate-400 font-medium">Operasional</span>
                    </div>
                </div>
            </div>

            {{-- CTA Button --}}
            <a href="{{ $about['cta_url'] }}"
               class="inline-block mt-8 px-8 py-3.5 rounded-2xl bg-[#BAD6EB] hover:bg-[#a1cbfa] text-slate-900 font-semibold text-sm transition-all duration-300 shadow-xs hover:shadow-md hover:-translate-y-0.5 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#334EAC] w-fit">
                {{ $about['cta_text'] }}
            </a>
        </div>

        {{-- ───── Right Column: Visual (5 cols) ───── --}}
        <div class="lg:col-span-5 relative flex items-center justify-center">

            {{-- Decorative wing / triangle glow (Figma right-side shape) --}}
            <div class="absolute -right-24 top-1/2 -translate-y-1/2 w-[450px] h-[450px] bg-gradient-to-l from-[#BAD6EB]/35 to-transparent pointer-events-none -z-10" style="clip-path: polygon(100% 0, 0 50%, 100% 100%);"></div>

            {{-- Clean Interactive Logo Link --}}
            <a href="/filosofi-logo" 
               class="group relative block p-2 transition-transform duration-300 transform hover:scale-105 focus:outline-none" 
               title="Klik untuk lihat Filosofi Logo Unitas SI">
                <img src="{{ asset($about['logo']) }}"
                     alt="Logo Unitas SI"
                     class="w-64 h-64 md:w-80 md:h-80 lg:w-[360px] lg:h-[360px] object-contain drop-shadow-sm group-hover:drop-shadow-lg transition-all duration-300">
            </a>
        </div>

    </div>
</section>