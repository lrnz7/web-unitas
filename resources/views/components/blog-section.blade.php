@props([
    'data' => null,
    'posts' => null,
])

@php
    if (!$data) {
        $jsonPath = base_path('data/unitas.json');
        $jsonData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    } else {
        $jsonData = $data;
    }

    $posts = $posts ?? array_slice($jsonData['blog'] ?? [], 0, 2);
@endphp

{{-- Category badge color map --}}
@php
    $categoryColors = [
        'Tutorial'  => 'bg-blue-100 text-blue-700',
        'Kegiatan'  => 'bg-emerald-100 text-emerald-700',
        'Design'    => 'bg-purple-100 text-purple-700',
        'Karir'     => 'bg-amber-100 text-amber-700',
        'Akademik'  => 'bg-sky-100 text-sky-700',
        'Organisasi'=> 'bg-rose-100 text-rose-700',
    ];
@endphp

<section id="blog" class="w-full max-w-[1440px] px-6 lg:px-12 py-12 mx-auto" aria-labelledby="blog-section-title">

    {{-- Section Header --}}
    <header class="text-center mb-10">
        <span class="inline-block text-xs font-semibold tracking-widest text-[#334EAC] uppercase mb-3">Konten Terbaru</span>
        <h2 id="blog-section-title" class="text-3xl sm:text-4xl font-extrabold text-slate-800 tracking-tight">
            Blog Terkini
        </h2>
        <p class="mt-3 text-slate-500 text-sm sm:text-base max-w-xl mx-auto">
            Artikel, tutorial, dan recap kegiatan terbaru dari komunitas Unitas Sistem Informasi.
        </p>
    </header>

    {{-- Blog Card Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @forelse($posts as $post)
            @php
                $badgeClass = $categoryColors[$post['category']] ?? 'bg-slate-100 text-slate-600';
            @endphp

            <article class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:-translate-y-1 hover:shadow-xl hover:border-blue-100 transition-all duration-300 ease-out flex flex-col">

                {{-- Thumbnail --}}
                <a href="{{ $post['url'] }}" class="block overflow-hidden aspect-[16/9] w-full" tabindex="-1" aria-hidden="true">
                    <img src="{{ asset($post['thumbnail']) }}"
                         alt="{{ $post['title'] }}"
                         class="w-full h-full object-cover object-center transition-transform duration-500 ease-out group-hover:scale-105">
                </a>

                {{-- Card Body --}}
                <div class="flex flex-col flex-1 p-6">

                    {{-- Meta: Category & Date --}}
                    <div class="flex items-center gap-3 mb-3">
                        <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold {{ $badgeClass }}">
                            {{ $post['category'] }}
                        </span>
                        <time class="text-xs text-slate-400 font-medium" datetime="{{ $post['date'] }}">
                            {{ $post['date'] }}
                        </time>
                    </div>

                    {{-- Title --}}
                    <h3 class="text-base sm:text-lg font-bold text-slate-800 leading-snug mb-3 group-hover:text-[#334EAC] transition-colors duration-200">
                        <a href="{{ $post['url'] }}" class="focus:outline-none focus-visible:ring-2 focus-visible:ring-[#334EAC] rounded">
                            {{ $post['title'] }}
                        </a>
                    </h3>

                    {{-- Excerpt --}}
                    <p class="text-sm text-slate-500 leading-relaxed line-clamp-3 flex-1">
                        {{ $post['excerpt'] }}
                    </p>

                    {{-- Read More Link --}}
                    <a href="{{ $post['url'] }}"
                       class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-[#334EAC] hover:text-[#1636E9] transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#334EAC] rounded w-fit">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </article>
        @empty
            <p class="col-span-full text-center text-slate-400 py-12">Belum ada artikel yang dipublikasikan.</p>
        @endforelse
    </div>

    {{-- View All Link --}}
    @if(count($posts) > 0)
        <div class="mt-10 text-center">
            <a href="/blog"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-sm font-semibold text-[#334EAC] border border-[#334EAC]/30 hover:bg-[#334EAC] hover:text-white hover:border-[#334EAC] transition-all duration-300 ease-out focus:outline-none focus-visible:ring-2 focus-visible:ring-[#334EAC]">
                Lihat Semua Artikel
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    @endif

</section>
