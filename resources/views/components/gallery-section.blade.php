@php
    $jsonPath = base_path('data/unitas.json');
    $unitasData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    $gallery = $unitasData['gallery'] ?? [];

    $categories = [
        ['id' => 'siconnect', 'name' => 'SICONNECT'],
        ['id' => 'galaksi1', 'name' => 'Galaxy Vol. 1'],
        ['id' => 'ldo26', 'name' => 'LDO'],
        ['id' => 'sgts', 'name' => 'SiBelajar'],
        ['id' => 'musun26', 'name' => 'MUSUN'],
        ['id' => 'aimpact', 'name' => 'AIMPACT'],
        ['id' => 'nexora', 'name' => 'N.E.X.O.R.A'],
    ];
@endphp

<section class="py-16 px-6 max-w-7xl mx-auto relative overflow-hidden" id="gallery" x-data="{ activeTab: 'siconnect' }">
    
    {{-- Background Accent Shape --}}
    <div class="absolute -left-28 top-12 w-96 h-[550px] bg-[#BBE1FA]/40 -z-10 rounded-tr-[160px] rounded-br-[160px] pointer-events-none"></div>

    {{-- Header Section --}}
    <div class="text-center max-w-2xl mx-auto mb-8 space-y-2">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
            Galeri Unitas Sistem Informasi
        </h2>
        <p class="text-xs md:text-sm text-slate-500 leading-relaxed">
            Lihat kumpulan dokumentasi kegiatan, event, dan momen seru UNITAS SI yang berhasil diabadikan. Yuk jelajahi galeri ini untuk melihat keseruan dan kebersamaan mahasiswa Sistem Informasi!
        </p>
    </div>

    {{-- Tab Filter Menu (Roll Kiri Kanan) --}}
    <div class="w-full flex justify-center mb-8">
        <div class="flex items-center gap-6 md:gap-8 overflow-x-auto whitespace-nowrap scrollbar-hide py-2 px-4 max-w-full">
            @foreach($categories as $cat)
                <button 
                    @click="activeTab = '{{ $cat['id'] }}'"
                    :class="activeTab === '{{ $cat['id'] }}' ? 'text-[#334EAC] border-[#334EAC] font-bold' : 'text-slate-400 border-transparent hover:text-slate-600 font-medium'"
                    class="pb-2 text-xs md:text-sm border-b-2 transition-all duration-200 uppercase focus:outline-none shrink-0 cursor-pointer">
                    {{ $cat['name'] }}
                </button>
            @endforeach
        </div>
    </div>

    {{-- Image Grid 3x3 --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach($gallery as $item)
            <div 
                x-show="activeTab === '{{ $item['category'] }}'"
                x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                class="group relative overflow-hidden rounded-2xl bg-slate-100 shadow-sm hover:shadow-lg transition-all duration-300">
                
                <img 
                    src="{{ asset($item['image']) }}" 
                    alt="{{ $item['title'] }}" 
                    class="w-full h-56 md:h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                
                {{-- Hover Overlay Info --}}
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                    <span class="text-white font-semibold text-xs md:text-sm">
                        {{ $item['title'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    {{-- TOMBOL SEE MORE GALLERY (DIBALIKIN LAGI DI SINI) --}}
    <div class="mt-12 text-center">
        <a href="/#gallery" 
           class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-white border border-slate-200 text-[#334EAC] font-bold text-xs tracking-wider uppercase shadow-sm hover:shadow-md hover:bg-blue-50 transition-all duration-200">
            See More Gallery
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>

</section>