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
        'label'       => 'PROGRAM STUDI',
        'title'       => "Program\nStudi Sistem\nInformasi",
        'description' => 'Program Studi Sistem Informasi Universitas Indraprasta PGRI membekali mahasiswa dengan kemampuan analitis, perancangan sistem, dan penguasaan teknologi terkini guna menjawab tantangan industri digital modern yang dinamis dan kompetitif.',
        'cta_text'    => 'Pelajari Selengkapnya',
        'cta_url'     => '/about/prodi',
        'logo'        => 'images/logo-prodi.png', // Nanti tinggal tarok file logo prodi di public/images/
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
                {{ $about['description'] }}
            </p>

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
            <a href="/about/prodi" 
               class="group relative block p-2 transition-transform duration-300 transform hover:scale-105 focus:outline-none" 
               title="Program Studi Sistem Informasi Unindra">
                <img src="{{ asset($about['logo']) }}"
                     alt="Logo Prodi Sistem Informasi"
                     class="w-64 h-64 md:w-80 md:h-80 lg:w-[360px] lg:h-[360px] object-contain drop-shadow-sm group-hover:drop-shadow-lg transition-all duration-300">
            </a>
        </div>

    </div>
</section>