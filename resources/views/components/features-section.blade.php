@php
    $jsonPath = base_path('data/unitas.json');
    $unitasData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    $features = $unitasData['features'] ?? [];
@endphp

<section class="py-16 px-6 max-w-7xl mx-auto" id="features">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        
        {{-- Kolom Kiri: Judul & Deskripsi --}}
        <div class="lg:col-span-5 space-y-3">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 leading-tight">
                Jelajahi, Semua <br /> Fitur yang Tersedia
            </h2>
            <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-sm font-medium">
                Fitur-fitur yang kami hadirkan untuk memudahkan dan mendukung perjalanan perkuliahan kalian di Sistem Informasi.
            </p>
        </div>

        {{-- Kolom Kanan: 2x2 Grid Presisi --}}
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5 items-start">
            @foreach($features as $index => $item)
                <a href="{{ $item['link'] ?? '#' }}" 
                   class="relative block bg-white p-7 rounded-2xl border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group overflow-hidden {{ $index % 2 !== 0 ? 'sm:mt-8' : '' }}">
                    
                    {{-- Garis Aksen Hover (Aman terkunci di dalam relative parent) --}}
                    <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                    {{-- Placeholder Icon Box --}}
                    <div class="h-14 w-14 mb-5 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-[#334EAC] font-bold text-xl group-hover:scale-110 transition-transform relative z-10">
                        {{ strtoupper(substr($item['title'], 0, 1)) }}
                    </div>
                    
                    <h3 class="text-base font-extrabold text-slate-900 tracking-wide mb-2 group-hover:text-[#334EAC] transition-colors relative z-10">
                        {{ $item['title'] }}
                    </h3>
                    
                    <p class="text-xs md:text-sm text-slate-500 leading-relaxed relative z-10">
                        {{ $item['description'] }}
                    </p>
                </a>
            @endforeach
        </div>

    </div>
</section>