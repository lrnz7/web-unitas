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
            <p class="text-slate-500 text-xs md:text-sm leading-relaxed max-w-sm">
                Fitur-fitur yang kami hadirkan untuk memudahkan dan mendukung perjalanan perkuliahan kalian di Sistem Informasi.
            </p>
        </div>

        {{-- Kolom Kanan: 2x2 Grid Presisi dengan Placeholder Icon --}}
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5 items-start">
            @foreach($features as $index => $item)
                <a href="{{ $item['link'] ?? '#' }}" 
                   class="block bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 border border-slate-100 transform hover:-translate-y-1 {{ $index % 2 !== 0 ? 'sm:mt-8' : '' }}">
                    
                    {{-- Placeholder Icon Box --}}
                    <div class="h-12 w-12 mb-4 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-[#334EAC] font-bold text-lg">
                        {{ strtoupper(substr($item['title'], 0, 1)) }}
                    </div>
                    
                    <h3 class="text-sm font-bold text-slate-900 tracking-wide mb-1.5">
                        {{ $item['title'] }}
                    </h3>
                    
                    <p class="text-[11px] text-slate-500 leading-relaxed">
                        {{ $item['description'] }}
                    </p>
                </a>
            @endforeach
        </div>

    </div>
</section>