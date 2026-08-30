@php
    $periods = [
        ['id' => '2024-2025', 'label' => 'Periode 2024–2025'],
        ['id' => '2025-2026', 'label' => 'Periode 2025–2026'],
        ['id' => '2026-2027', 'label' => 'Periode 2026–2027']
    ];

    $defaultPeriod = '2025-2026';

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
                // Koordinator & BPH
                ['id' => 101, 'division' => 'koordinator', 'role' => 'Koordinator', 'name' => 'M. Daffa Athaya', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 102, 'division' => 'koordinator', 'role' => 'Wakil Koordinator', 'name' => 'M. Fathan Arbiansyah', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 103, 'division' => 'koordinator', 'role' => 'Sekretaris', 'name' => 'Syahla Asyifa Nova', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 104, 'division' => 'koordinator', 'role' => 'Bendahara', 'name' => 'Rahma Arsyita Saputri', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                // Divisi PSDM
                ['id' => 105, 'division' => 'psdm', 'role' => 'Kepala Divisi PSDM', 'name' => 'Alferdo Khevel Lilo', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 106, 'division' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'Daffa Imam P', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 107, 'division' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'M. Ivan Satrio', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 108, 'division' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'Mutiara Aulia', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                // Divisi KOMWIRA
                ['id' => 109, 'division' => 'komwira', 'role' => 'Kepala Divisi KOMWIRA', 'name' => 'Afif Faturrahmanudin', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 110, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Nabil Nur Syaban', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 111, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Ardita Putri Maharani', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 112, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'TB. Adam Santana', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],
                ['id' => 113, 'division' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Gilang Reihan', 'photo_primary' => '', 'photo_secondary' => '', 'tupoksi' => []],

                // Divisi PPPM
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

<section class="py-16 px-6 max-w-7xl mx-auto" id="struktur" 
         x-data="{ 
            selectedPeriod: '{{ $defaultPeriod }}', 
            activeDiv: 'koordinator'
         }"
         x-init="$watch('selectedPeriod', value => {
             activeDiv = 'koordinator';
         })">
    
    {{-- Header Section & Dropdown Periode --}}
    <div class="text-center max-w-2xl mx-auto mb-10 space-y-4">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
            Struktural Organisasi Unitas SI
        </h2>
        
        <div class="inline-flex items-center gap-3 bg-white px-4 py-2 rounded-2xl border border-slate-200 shadow-xs">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Periode:</span>
            <select x-model="selectedPeriod" 
                    class="bg-transparent text-sm font-extrabold text-[#334EAC] focus:outline-none cursor-pointer">
                @foreach($periods as $p)
                    <option value="{{ $p['id'] }}">{{ $p['label'] }}</option>
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
                    :class="activeDiv === '{{ $div['id'] }}' ? 'bg-[#334EAC] text-white font-bold shadow-lg shadow-blue-500/30 scale-105' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                    class="px-6 py-2.5 rounded-full text-xs md:text-sm transition-all duration-300 uppercase tracking-wider cursor-pointer">
                    {{ $div['name'] }}
                </button>
            @endforeach
        </div>

        @foreach($data24['divisions'] as $div)
            <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-12" x-cloak>
                <div class="flex justify-center flex-wrap gap-8 items-start">
                    @foreach($data24['members'] as $m)
                        @if($m['division'] === $div['id'])
                            <div class="group bg-white rounded-3xl p-6 border {{ $m['role'] === 'Koordinator' ? 'border-blue-300 ring-4 ring-blue-50' : 'border-slate-200' }} shadow-md hover:shadow-2xl hover:shadow-blue-500/20 hover:border-[#334EAC] transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full sm:w-[calc(50%-16px)] lg:w-[calc(33.333%-22px)] max-w-sm">
                                
                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100 flex items-center justify-center z-10 text-slate-300">
                                    @if(!empty($m['photo_primary']))
                                        <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}" class="absolute inset-0 w-full h-full object-cover">
                                    @else
                                        <svg class="w-32 h-32 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    @endif
                                </div>

                                <div class="text-center space-y-1 relative z-10">
                                    <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">{{ $m['role'] }}</span>
                                    <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $m['name'] }}</h3>
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
                            :class="activeDiv === '{{ $div['id'] }}' ? 'bg-[#334EAC] text-white font-bold shadow-lg shadow-blue-500/30 scale-105' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                            class="px-6 py-2.5 rounded-full text-xs md:text-sm transition-all duration-300 uppercase tracking-wider cursor-pointer">
                            {{ $div['name'] }}
                        </button>
                    @endforeach
                </div>

                {{-- Looping Divisi --}}
                @foreach($divs as $div)
                    <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-12" x-cloak>
                        
                        {{-- Tupoksi Kotak (Untuk PSDM, KOMWIRA, PPPM) --}}
                        @if(isset($divisionInfo[$div['id']]))
                            <div class="max-w-4xl mx-auto space-y-3">
                                <h3 class="text-lg md:text-xl font-extrabold text-slate-900 text-center tracking-tight">
                                    {{ $divisionInfo[$div['id']]['name'] }}
                                </h3>
                                <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-xs">
                                    <span class="text-xs font-extrabold text-[#334EAC] uppercase tracking-wider block mb-2">Tupoksi Utama Divisi</span>
                                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs text-slate-600 list-disc pl-4">
                                        @foreach($divisionInfo[$div['id']]['tupoksi'] as $tup)
                                            <li>{{ $tup }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if($div['id'] === 'koordinator')
                            
                            {{-- Koordinator Utama (Di atas sendiri, tengah) --}}
                            <div class="flex justify-center">
                                @foreach($members as $m)
                                    @if($m['division'] === 'koordinator' && $m['role'] === 'Koordinator')
                                        <div class="group bg-white rounded-3xl p-6 border border-blue-300 ring-4 ring-blue-50 shadow-xl hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full max-w-sm">
                                            
                                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                            <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100 z-10"
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
                                                <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">{{ $m['role'] }}</span>
                                                <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $m['name'] }}</h3>
                                            </div>

                                            @if(!empty($m['tupoksi']))
                                                <div class="mt-4 pt-4 border-t border-slate-100 text-left relative z-10">
                                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Detail Tugas:</span>
                                                    <ul class="text-xs text-slate-600 space-y-1.5 list-disc pl-4">
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

                            {{-- Jajaran BPH (Grid di bawahnya) --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-start">
                                @foreach($members as $m)
                                    @if($m['division'] === 'koordinator' && $m['role'] !== 'Koordinator')
                                        <div class="group bg-white rounded-3xl p-6 border border-slate-200 shadow-md hover:shadow-2xl hover:shadow-blue-500/20 hover:border-[#334EAC] transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                                            
                                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                            <div class="relative w-full h-64 rounded-2xl overflow-hidden mb-5 bg-slate-100 z-10"
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
                                                <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">{{ $m['role'] }}</span>
                                                <h3 class="text-base font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $m['name'] }}</h3>
                                            </div>

                                            @if(!empty($m['tupoksi']))
                                                <div class="mt-4 pt-4 border-t border-slate-100 text-left relative z-10">
                                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-2">Detail Tugas:</span>
                                                    <ul class="text-xs text-slate-600 space-y-1.5 list-disc pl-4">
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

                            {{-- Divisi Standar (PSDM, KOMWIRA, PPPM): Kepala Divisi di Atas, Anggota di Bawah --}}
                            @php
                                $kadiv = collect($members)->first(fn($m) => $m['division'] === $div['id'] && (stripos($m['role'], 'Kepala') !== false || stripos($m['role'], 'Kadiv') !== false));
                                if(!$kadiv) {
                                    $kadiv = collect($members)->first(fn($m) => $m['division'] === $div['id']);
                                }
                            @endphp

                            @if($kadiv)
                                <div class="flex justify-center">
                                    <div class="group bg-white rounded-3xl p-6 border border-blue-300 ring-4 ring-blue-50 shadow-xl hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full max-w-sm">
                                        
                                        <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                        <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100 z-10"
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
                                            <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">Kepala Divisi</span>
                                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $kadiv['name'] }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Anggota Divisi (Grid di bawah Kadiv) --}}
                            <div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-start">
                                    @foreach($members as $m)
                                        @if($m['division'] === $div['id'] && $m['id'] !== ($kadiv['id'] ?? null))
                                            <div class="group bg-white rounded-3xl p-6 border border-slate-200 shadow-md hover:shadow-2xl hover:shadow-blue-500/20 hover:border-[#334EAC] transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                                                
                                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                                <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100 z-10"
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
                                                    <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">Anggota Divisi</span>
                                                    <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $m['name'] }}</h3>
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

</section>