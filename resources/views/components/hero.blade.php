@props([
    'data' => null,
    'badge' => null,
    'title' => null,
    'tagline' => null,
    'bgImage' => null,
    'ctaPrimary' => null,
    'ctaSecondary' => null,
])

@php
    if (!$data) {
        $jsonPath = base_path('data/unitas.json');
        $jsonData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    } else {
        $jsonData = $data;
    }

    $heroData = $jsonData['hero'] ?? [];

    $badge = $badge ?? ($heroData['badge'] ?? 'Unitas Sistem Informasi');
    $title = $title ?? ($heroData['title'] ?? 'Selamat Datang di Website Unitas Sistem Informasi');
    $tagline = $tagline ?? ($heroData['tagline'] ?? 'Wadah kreasi, inovasi, kolaborasi, dan pengembangan teknologi mahasiswa Sistem Informasi.');
@endphp

{{-- Hero Section Container --}}
<section class="relative w-full max-w-[1440px] px-6 lg:px-12 py-8 md:py-12 mx-auto" aria-labelledby="hero-title">
    {{-- Side Decorative Background Wings --}}
    <div class="hidden xl:block absolute -left-12 top-1/2 -translate-y-1/2 w-48 h-64 bg-[#BAD6EB]/40 rounded-r-[60px] blur-xl pointer-events-none z-0"></div>
    <div class="hidden xl:block absolute -right-12 top-1/2 -translate-y-1/2 w-48 h-64 bg-[#BAD6EB]/40 rounded-l-[60px] blur-xl pointer-events-none z-0"></div>

    {{-- Main Hero Card Banner --}}
    <article class="group/card relative w-full min-h-[580px] lg:min-h-[620px] rounded-3xl overflow-hidden shadow-2xl shadow-blue-950/20 border border-slate-200/50 flex items-center justify-center text-center bg-[#072B63]">
        
        {{-- Background Image --}}
        <img src="{{ asset('images/IMG_5225.JPG') }}"
             alt="Foto Dokumentasi Unitas Sistem Informasi"
             class="absolute inset-0 w-full h-full object-cover object-center z-0 scale-100 transition-transform duration-700 ease-out group-hover/card:scale-105"
             onerror="this.src='https://placehold.co/1200x600/072B63/FFF?text=Unitas+Sistem+Informasi'">

        {{-- Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-tr from-[#072B63]/80 via-[#1E4A8D]/65 to-[#2A65B8]/70 z-10"></div>

        {{-- Content Wrapper --}}
        <div class="relative z-20 flex flex-col items-center justify-center p-6 sm:p-12 lg:p-16 text-center w-full">

            {{-- Hero Heading --}}
            <h1 id="hero-title" class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight sm:leading-tight lg:leading-snug drop-shadow-md max-w-4xl transition-all duration-300 ease-out transform hover:scale-[1.02] hover:-translate-y-1 hover:drop-shadow-2xl cursor-default">
                {{ $title }}
            </h1>

            {{-- Subtitle / Tagline --}}
            <p class="mt-4 sm:mt-6 text-sm sm:text-base md:text-lg text-blue-100/90 font-normal leading-relaxed max-w-2xl transition-all duration-300 ease-out transform hover:scale-[1.02] hover:-translate-y-1 hover:drop-shadow-xl cursor-default">
                {{ $tagline }}
            </p>

            {{-- CTA Button Group --}}
            <nav class="mt-8 sm:mt-10 flex flex-wrap items-center justify-center gap-3 sm:gap-4" aria-label="Aksi Cepat Hero">
                <a href="{{ url('/about/struktural') }}"
                   class="px-8 py-3.5 rounded-full text-sm sm:text-base font-semibold text-white bg-white/20 border border-white/40 backdrop-blur-md hover:bg-white hover:text-[#072B63] hover:border-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-out focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                    Struktural Organisasi
                </a>
            </nav>
        </div>
    </article>
</section>