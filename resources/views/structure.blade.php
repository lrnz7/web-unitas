@php
    $periods = [
        ['id' => '2024-2025', 'label' => '2024/25'],
        ['id' => '2025-2026', 'label' => '2025/26'],
        ['id' => '2026-2027', 'label' => '2026/27']
    ];

    $defaultPeriod = '2025-2026';

    $divisionalCovers = [
        '2025-2026' => [
            'koordinator'  => asset('images/divisi/2025/koordinator-group.jpg'),
            'psdm'         => asset('images/divisi/2025/psdm-group.jpg'),
            'komwira'      => asset('images/divisi/2025/komwira-group.jpg'),
            'pppm'         => asset('images/divisi/2025/pppm-group.jpg'),
        ],
        '2026-2027' => [
            'koordinator'  => asset('images/divisi/2026/koordinator-group.jpg'),
            'psdm'         => asset('images/divisi/2026/psdm-group.jpg'),
            'komwira'      => asset('images/divisi/2026/komwira-group.jpg'),
            'pppm'         => asset('images/divisi/2026/pppm-group.jpg'),
        ]
    ];

    $allStructureData = [
        '2024-2025' => [
            'divisions' => [
                ['id' => 'koordinator', 'name' => 'Koordinator & BPH'],
                ['id' => 'kaderisasi', 'name' => 'Kaderisasi'],
                ['id' => 'kewirausahaan', 'name' => 'Kewirausahaan'],
                ['id' => 'kominfo', 'name' => 'Kominfo'],
            ],
            'members' => [
                ['id' => 1, 'division' => 'koordinator', 'role' => 'Koordinator', 'name' => 'M Roihan Hidayatullah', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 2, 'division' => 'koordinator', 'role' => 'Sekretaris', 'name' => 'Jane Janitra M A', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 3, 'division' => 'koordinator', 'role' => 'Bendahara', 'name' => 'M Asriel Amri', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                
                ['id' => 4, 'division' => 'kaderisasi', 'role' => 'Kepala Divisi Kaderisasi', 'name' => 'Manda Christoffel Kowaas', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 5, 'division' => 'kaderisasi', 'role' => 'Anggota Kaderisasi', 'name' => 'Narendro Ageng Winarsis', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                ['id' => 6, 'division' => 'kewirausahaan', 'role' => 'Kepala Divisi Kewirausahaan', 'name' => 'Deden Taufiqurrahman', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                ['id' => 7, 'division' => 'kominfo', 'role' => 'Kepala Divisi Kominfo', 'name' => 'Fazri Aziz Siregar', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 8, 'division' => 'kominfo', 'role' => 'Anggota Kominfo', 'name' => 'Naufal Rafi Mudzafar', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
            ]
        ],
        '2025-2026' => $structure['data']['2025-2026'] ?? [
            'divisions' => [
                ['id' => 'koordinator', 'name' => 'Koordinator & BPH'],
                ['id' => 'psdm', 'name' => 'PSDM'],
                ['id' => 'komwira', 'name' => 'KOMWIRA'],
                ['id' => 'pppm', 'name' => 'PPPM']
            ],
            'members' => $structure['data']['2025-2026']['members'] ?? []
        ],
        '2026-2027' => [
            'divisions' => [
                ['id' => 'koordinator', 'name' => 'Koordinator & BPH'],
                ['id' => 'psdm', 'name' => 'PSDM'],
                ['id' => 'komwira', 'name' => 'KOMWIRA'],
                ['id' => 'pppm', 'name' => 'PPPM']
            ],
            'members' => [
                ['id' => 101, 'division' => 'koordinator', 'role' => 'Koordinator', 'name' => 'M. Daffa Athaya', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 102, 'division' => 'koordinator', 'role' => 'Wakil Koordinator', 'name' => 'M. Fathan Arbiansyah', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 103, 'division' => 'koordinator', 'role' => 'Sekretaris', 'name' => 'Syahla Asyifa Nova', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 104, 'division' => 'koordinator', 'role' => 'Bendahara', 'name' => 'Rahma Arsyita Saputri', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                ['id' => 105, 'division' => 'psdm', 'role' => 'Kepala Divisi PSDM', 'name' => 'Alferdo Khevel Lilo', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 106, 'division' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'Daffa Imam P', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 107, 'division' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'M. Ivan Satrio', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 108, 'division' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'Mutiara Aulia', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                ['id' => 109, 'division' => 'komwira', 'role' => 'Kepala Divisi KOMWIRA', 'name' => 'Afif Faturrahmanudin', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 110, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Nabil Nur Syaban', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 111, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Ardita Putri Maharani', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 112, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'TB. Adam Santana', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 113, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Gilang Reihan', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                ['id' => 114, 'division' => 'pppm', 'role' => 'Kepala Divisi PPPM', 'name' => 'Wardatun Nazwa Rohmah', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 115, 'division' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Aldea Salwa Nur Safitri', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 116, 'division' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Andhika Ricky', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 117, 'division' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Rapiza Akbar', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 118, 'division' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Ferdy Irmansyah', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
            ]
        ]
    ];

    $divisionInfo = [
        'psdm' => [
            'name' => 'PSDM (Pengembangan Sumber Daya Manusia)',
            'tupoksi' => [
                "Mengelola proses perekrutan dan pembinaan anggota baru.",
                "Menyediakan sarana pengembangan diri bagi anggota.",
                "Menyelenggarakan kokulikuler.",
                "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."
            ]
        ],
        'komwira' => [
            'name' => 'KOMWIRA (Komunikasi, Media, dan Wirausaha)',
            'tupoksi' => [
                "Menyampaikan informasi organisasi kepada anggota maupun pihak luar.",
                "Mengelola media sosial dan platform komunikasi organisasi.",
                "Membuat konten publikasi (poster, berita, dokumentasi).",
                "Mendokumentasikan seluruh kegiatan organisasi.",
                "Merancang program usaha untuk mendukung dana organisasi."
            ]
        ],
        'pppm' => [
            'name' => 'PPPM (Penelitian, Pengembangan, dan Pengabdian Masyarakat)',
            'tupoksi' => [
                "Mengembangkan inovasi berbasis teknologi dan Sistem Informasi.",
                "Melakukan kajian terhadap isu-isu teknologi, pendidikan, dan masyarakat.",
                "Menyelenggarakan seminar, diskusi ilmiah, atau forum akademik.",
                "Merancang dan melaksanakan kegiatan pengabdian kepada masyarakat."
            ]
        ]
    ];
@endphp

<!-- CUSTOM CSS UNTUK SHADOW & FIXED VIEWPORT COVERAGE -->
<style>
    .text-clean-readable {
        color: #ffffff;
        text-shadow: 
            0 1px 2px rgba(0, 0, 0, 0.8), 
            0 4px 16px rgba(0, 0, 0, 0.4);
    }

    .hero-smooth-scrim {
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.65) 0%,   
            rgba(0, 0, 0, 0.7) 30%,    
            rgba(0, 0, 0, 0.75) 100%
        );
    }
</style>

<!-- WRAPPER UTAMA (Kembali ke relative w-full min-h-screen) -->
<div class="relative w-full min-h-screen bg-slate-950 text-slate-100 overflow-hidden" 
     id="struktur" 
     x-data="{ 
        selectedPeriod: '{{ $defaultPeriod }}', 
        activeDiv: 'koordinator',
        covers: {{ json_encode($divisionalCovers) }}
     }"
     x-init="$watch('selectedPeriod', value => { activeDiv = 'koordinator'; })">

    <!-- LAYER 1: FIXED BACKGROUND IMAGE (Memakai fixed inset-0 agar full layar tanpa kepotong) -->
    <div x-show="selectedPeriod !== '2024-2025'" 
         class="fixed inset-0 -z-20 pointer-events-none overflow-hidden" x-cloak>
        <template x-for="(divCovers, periodKey) in covers" :key="periodKey">
            <template x-for="(url, divKey) in divCovers" :key="divKey">
                <div x-show="selectedPeriod === periodKey && activeDiv === divKey"
                     x-transition:enter="transition opacity duration-500 ease-out"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition opacity duration-300 ease-in"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="absolute inset-0 w-full h-full">
                    <img :src="url" alt="Background Divisi" class="w-full h-full object-cover object-center">
                </div>
            </template>
        </template>
    </div>

    <!-- LAYER 2: GLOBAL SMOOTH SCRIM (Fixed murni menutupi viewport) -->
    <div class="fixed inset-0 -z-10 hero-smooth-scrim pointer-events-none"></div>

    <!-- CONTENT LAYER -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 pt-20 pb-32 space-y-12">
    
        {{-- Header Section & Dropdown Periode --}}
        <div class="text-center max-w-3xl mx-auto space-y-4 pt-4">
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight text-clean-readable">
                Struktural Organisasi Unitas SI
            </h1>
            
            <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-md px-5 py-2.5 rounded-2xl border border-white/20 shadow-2xl">
                <span class="text-xs font-semibold text-white uppercase tracking-wider text-clean-readable">PERIODE:</span>
                <select x-model="selectedPeriod" 
                        class="bg-transparent text-sm font-bold text-blue-400 focus:outline-none cursor-pointer text-clean-readable">
                    @foreach($periods as $p)
                        <option value="{{ $p['id'] }}" class="bg-slate-900 text-white">{{ $p['label'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- ========================================== --}}
        {{-- KONDISI A: LOGIC LAYOUT PERIODE 2024-2025 --}}
        {{-- ========================================== --}}
        <div x-show="selectedPeriod === '2024-2025'" class="space-y-12" x-cloak>
            @php
                $data24 = $allStructureData['2024-2025'];
            @endphp

            <div class="flex items-center justify-center gap-3 flex-wrap mb-12">
                @foreach($data24['divisions'] as $div)
                    <button 
                        type="button"
                        @click="activeDiv = '{{ $div['id'] }}'"
                        :class="activeDiv === '{{ $div['id'] }}' ? 'bg-blue-600 text-white font-bold shadow-lg shadow-blue-500/30 scale-105 border-blue-400' : 'bg-white/10 text-slate-200 border border-white/15 hover:bg-white/20 backdrop-blur-md'"
                        class="px-6 py-2.5 rounded-full text-xs md:text-sm transition-all duration-300 uppercase tracking-wider cursor-pointer border text-clean-readable font-semibold">
                        {{ $div['name'] }}
                    </button>
                @endforeach
            </div>

            @foreach($data24['divisions'] as $div)
                <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-12" x-cloak>
                    <div class="flex justify-center flex-wrap gap-8 items-start">
                        @foreach($data24['members'] as $m)
                            @if($m['division'] === $div['id'])
                                <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border {{ $m['role'] === 'Koordinator' ? 'border-blue-400 ring-4 ring-blue-500/20' : 'border-white/20' }} shadow-2xl hover:border-blue-500 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-22px)] max-w-sm">
                                    
                                    <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-blue-500 origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                    <div class="relative w-full h-72 rounded-xl overflow-hidden mb-5 bg-slate-950 flex items-center justify-center z-10 text-slate-400 border border-white/10">
                                        @if(!empty($m['photo_primary']))
                                            <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}" class="absolute inset-0 w-full h-full object-cover">
                                        @else
                                            <svg class="w-32 h-32 fill-current" viewBox="0 0 24 24">
                                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                            </svg>
                                        @endif
                                    </div>

                                    <div class="text-center space-y-1 relative z-10">
                                        <span class="text-[11px] font-semibold text-blue-400 uppercase tracking-wider block text-clean-readable">{{ $m['role'] }}</span>
                                        <h3 class="text-lg font-bold text-clean-readable group-hover:text-blue-300 transition-colors">{{ $m['name'] }}</h3>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>


        {{-- ======================================================== --}}
        {{-- KONDISI B: LOGIC LAYOUT PERIODE 2025-2026 & 2026-2027 --}}
        {{-- ======================================================== --}}
        <div x-show="selectedPeriod !== '2024-2025'" class="space-y-12" x-cloak>
            @foreach(['2025-2026', '2026-2027'] as $pKey)
                <div x-show="selectedPeriod === '{{ $pKey }}'" class="space-y-12" x-cloak>
                    @php
                        $divs = $allStructureData[$pKey]['divisions'] ?? [];
                        $members = $allStructureData[$pKey]['members'] ?? [];
                    @endphp

                    {{-- Filter Tab Divisi --}}
                    <div class="flex items-center justify-center gap-3 flex-wrap mb-12">
                        @foreach($divs as $div)
                            <button 
                                type="button"
                                @click="activeDiv = '{{ $div['id'] }}'"
                                :class="activeDiv === '{{ $div['id'] }}' ? 'bg-blue-600 text-white font-bold shadow-lg shadow-blue-500/30 scale-105 border-blue-400' : 'bg-white/10 text-slate-200 border border-white/15 hover:bg-white/20 hover:text-white backdrop-blur-md'"
                                class="px-6 py-2.5 rounded-full text-xs md:text-sm transition-all duration-300 uppercase tracking-wider cursor-pointer border text-clean-readable font-semibold">
                                {{ $div['name'] }}
                            </button>
                        @endforeach
                    </div>

                    {{-- Looping Divisi --}}
                    @foreach($divs as $div)
                        <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-12" x-cloak>
                            
                            {{-- Tupoksi Kotak --}}
                            @if(isset($divisionInfo[$div['id']]))
                                <div class="max-w-4xl mx-auto space-y-3">
                                    <h3 class="text-lg md:text-xl font-bold text-center tracking-tight text-clean-readable">
                                        {{ $divisionInfo[$div['id']]['name'] }}
                                    </h3>
                                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-white/20 shadow-2xl">
                                        <span class="text-xs font-bold text-blue-400 uppercase tracking-wider block mb-2 text-clean-readable">Tupoksi Utama Divisi</span>
                                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-white/95 font-medium list-disc pl-4 text-clean-readable">
                                            @foreach($divisionInfo[$div['id']]['tupoksi'] as $tup)
                                                <li>{{ $tup }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            @if($div['id'] === 'koordinator')
                                
                                {{-- Koordinator Utama --}}
                                <div class="flex justify-center">
                                    @foreach($members as $m)
                                        @if($m['division'] === 'koordinator' && $m['role'] === 'Koordinator')
                                            <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-blue-400 ring-4 ring-blue-500/20 shadow-2xl hover:shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full max-w-sm">
                                                
                                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-blue-500 origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                                <div class="relative w-full h-72 rounded-xl overflow-hidden mb-5 bg-slate-950 border border-white/15 z-10"
                                                     x-data="{ 
                                                        isFormal: true, 
                                                        timer: null,
                                                        startHover() {
                                                            this.isFormal = false;
                                                            this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                                        },
                                                        endHover() {
                                                            clearInterval(this.timer);
                                                            this.isFormal = true;
                                                        }
                                                    }"
                                                     @mouseenter="startHover()" @mouseleave="endHover()">
                                                    
                                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">

                                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                                </div>

                                                <div class="text-center space-y-1 relative z-10">
                                                    <span class="text-[11px] font-semibold text-blue-400 uppercase tracking-wider block text-clean-readable">{{ $m['role'] }}</span>
                                                    <h3 class="text-lg font-bold text-clean-readable group-hover:text-blue-300 transition-colors">{{ $m['name'] }}</h3>
                                                </div>

                                                @if(!empty($m['tupoksi']))
                                                    <div class="mt-4 pt-4 border-t border-white/15 text-left relative z-10">
                                                        <span class="text-[10px] font-semibold text-white/90 uppercase tracking-wider block mb-2 text-clean-readable">Detail Tugas:</span>
                                                        <ul class="text-xs text-white/95 space-y-1.5 list-disc pl-4 font-medium text-clean-readable">
                                                            @foreach($m['tupoksi'] as $tup)
                                                                <li>{{ $tup }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                {{-- Jajaran BPH --}}
                                <div class="grid grid-cols-1 sm:grid-cols-2 {{ $pKey === '2025-2026' ? 'lg:grid-cols-4' : 'lg:grid-cols-3' }} gap-6 items-start">
                                    @foreach($members as $m)
                                        @if($m['division'] === 'koordinator' && $m['role'] !== 'Koordinator')
                                            <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/15 shadow-2xl hover:shadow-blue-500/20 hover:border-blue-500 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                                                
                                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-blue-500 origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                                <div class="relative w-full h-64 rounded-xl overflow-hidden mb-5 bg-slate-950 border border-white/15 z-10"
                                                     x-data="{ 
                                                        isFormal: true, 
                                                        timer: null,
                                                        startHover() {
                                                            this.isFormal = false;
                                                            this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                                        },
                                                        endHover() {
                                                            clearInterval(this.timer);
                                                            this.isFormal = true;
                                                        }
                                                    }"
                                                     @mouseenter="startHover()" @mouseleave="endHover()">
                                                    
                                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">

                                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                                </div>

                                                <div class="text-center space-y-1 relative z-10">
                                                    <span class="text-[11px] font-semibold text-blue-400 uppercase tracking-wider block text-clean-readable">{{ $m['role'] }}</span>
                                                    <h3 class="text-base font-bold text-clean-readable group-hover:text-blue-300 transition-colors">{{ $m['name'] }}</h3>
                                                </div>

                                                @if(!empty($m['tupoksi']))
                                                    <div class="mt-4 pt-4 border-t border-white/15 text-left relative z-10">
                                                        <span class="text-[10px] font-semibold text-white/90 uppercase tracking-wider block mb-2 text-clean-readable">Detail Tugas:</span>
                                                        <ul class="text-xs text-white/95 space-y-1.5 list-disc pl-4 font-medium text-clean-readable">
                                                            @foreach($m['tupoksi'] as $tup)
                                                                <li>{{ $tup }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                            @else

                                {{-- Divisi Standar --}}
                                @php
                                    $kadiv = collect($members)->first(fn($m) => $m['division'] === $div['id'] && (stripos($m['role'], 'Kepala') !== false || stripos($m['role'], 'Kadiv') !== false));
                                    if(!$kadiv) {
                                        $kadiv = collect($members)->first(fn($m) => $m['division'] === $div['id']);
                                    }
                                @endphp

                                @if($kadiv)
                                    <div class="flex justify-center">
                                        <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-blue-400 ring-4 ring-blue-500/20 shadow-2xl hover:shadow-blue-500/30 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full max-w-sm">
                                            
                                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-blue-500 origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                            <div class="relative w-full h-72 rounded-xl overflow-hidden mb-5 bg-slate-950 border border-white/15 z-10"
                                                 x-data="{ 
                                                    isFormal: true, 
                                                    timer: null,
                                                    startHover() {
                                                        this.isFormal = false;
                                                        this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                                    },
                                                    endHover() {
                                                        clearInterval(this.timer);
                                                        this.isFormal = true;
                                                    }
                                                }"
                                                 @mouseenter="startHover()" @mouseleave="endHover()">
                                                
                                                <img src="{{ asset($kadiv['photo_primary']) }}" alt="{{ $kadiv['name'] }}"
                                                     :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                                     class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                     onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">

                                                <img src="{{ asset($kadiv['photo_secondary']) }}" alt="{{ $kadiv['name'] }} Pose"
                                                     :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                                     class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                     onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                            </div>

                                            <div class="text-center space-y-1 relative z-10">
                                                <span class="text-[11px] font-semibold text-blue-400 uppercase tracking-wider block text-clean-readable">Kepala Divisi</span>
                                                <h3 class="text-lg font-bold text-clean-readable group-hover:text-blue-300 transition-colors">{{ $kadiv['name'] }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                {{-- Anggota Divisi --}}
                                <div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-start">
                                        @foreach($members as $m)
                                            @if($m['division'] === $div['id'] && $m['id'] !== ($kadiv['id'] ?? null))
                                                <div class="group bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/15 shadow-2xl hover:shadow-blue-500/20 hover:border-blue-500 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                                                    
                                                    <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-blue-500 origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                                    <div class="relative w-full h-72 rounded-xl overflow-hidden mb-5 bg-slate-950 border border-white/15 z-10"
                                                         x-data="{ 
                                                            isFormal: true, 
                                                            timer: null,
                                                            startHover() {
                                                                this.isFormal = false;
                                                                this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                                            },
                                                            endHover() {
                                                                clearInterval(this.timer);
                                                                this.isFormal = true;
                                                            }
                                                        }"
                                                         @mouseenter="startHover()" @mouseleave="endHover()">
                                                        
                                                        <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                                             :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                                             class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                             onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">

                                                        <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                                             :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                                             class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                                             onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                                    </div>

                                                    <div class="text-center space-y-1 relative z-10">
                                                        <span class="text-[11px] font-semibold text-blue-400 uppercase tracking-wider block text-clean-readable">Anggota Divisi</span>
                                                        <h3 class="text-lg font-bold text-clean-readable group-hover:text-blue-300 transition-colors">{{ $m['name'] }}</h3>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            @endif

                        </div>
                    @endforeach

                </div>
            @endforeach

        </div>

    </div>

</div>