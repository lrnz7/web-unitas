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

<section class="relative isolate overflow-hidden bg-white pt-24 pb-16 md:pt-32 md:pb-24">

    {{-- Background image: full-width fade on mobile, right-half on desktop --}}
    <div class="absolute inset-x-0 top-0 -z-10 h-[52svh] md:inset-y-0 md:left-1/2 md:h-auto md:w-1/2">
        <img src="{{ asset('images/IMG-20260823-WA0068.jpg') }}"
            alt="Foto Dokumentasi Unitas Sistem Informasi"
            class="size-full object-cover object-[center_25%] md:object-center">
        <div class="absolute inset-0 bg-linear-to-b from-transparent via-white/50 to-white md:bg-linear-to-r md:from-white md:via-white/40 md:to-transparent"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 md:px-8">
        <div class="mt-[26svh] md:mt-0 md:max-w-xl">

            {{-- Heading --}}
            <h1 id="hero-title"
                class="mt-5 text-[2.75rem] leading-[1.05] font-semibold tracking-[-0.035em] text-balance text-slate-900 sm:text-6xl md:text-7xl">
                {{ $title }}
            </h1>

            {{-- Tagline / Subtext --}}
            <p class="mt-5 max-w-sm text-base text-slate-600 text-balance sm:max-w-xl md:text-lg">
                {{ $tagline }}
            </p>

            {{-- CTA Buttons --}}
            <div class="mt-8 flex flex-col items-stretch gap-3 sm:flex-row sm:items-center">
                <a href="{{ url('/about/unitas') }}"
                    class="inline-flex w-full items-center justify-center rounded-full bg-[#334EAC] px-6 py-3 text-sm font-medium text-white shadow-lg shadow-[#334EAC]/25 transition duration-300 hover:-translate-y-0.5 hover:bg-[#334EAC]/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#334EAC] sm:w-auto">
                    About Us
                </a>
            </div>

        </div>
    </div>
</section>