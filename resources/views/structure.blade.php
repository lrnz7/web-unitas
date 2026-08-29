@php
    $periods = $structure['periods'] ?? [];
    $structureData = $structure['data'] ?? [];
    $defaultPeriod = '2025-2026';
    $currentDivisions = $structureData[$defaultPeriod]['divisions'] ?? [];
    $currentMembers = $structureData[$defaultPeriod]['members'] ?? [];

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
            activeDiv: '{{ $currentDivisions[0]['id'] ?? 'koordinator' }}'
         }">
    
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

    {{-- Filter Tab Divisi --}}
    <div class="flex items-center justify-center gap-3 flex-wrap mb-12">
        @foreach($currentDivisions as $div)
            <button 
                type="button"
                @click="activeDiv = '{{ $div['id'] }}'"
                :class="activeDiv === '{{ $div['id'] }}' ? 'bg-[#334EAC] text-white font-bold shadow-lg shadow-blue-500/30 scale-105' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                class="px-6 py-2.5 rounded-full text-xs md:text-sm transition-all duration-300 uppercase tracking-wider cursor-pointer">
                {{ $div['name'] }}
            </button>
        @endforeach
    </div>

    {{-- Looping Berdasarkan Divisi Aktif --}}
    @foreach($currentDivisions as $div)
        <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-12" x-cloak>
            
            {{-- Header Judul & Kotak Tupoksi Divisi --}}
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
                
                {{-- Koordinator Utama --}}
                <div class="flex justify-center">
                    @foreach($currentMembers as $m)
                        @if($m['division'] === 'koordinator' && $m['role'] === 'Koordinator')
                            <div 
                                x-data="{ 
                                    isFormal: true, 
                                    timer: null,
                                    startHover() {
                                        this.isFormal = false;
                                        this.timer = setInterval(() => {
                                            this.isFormal = !this.isFormal;
                                        }, 1500);
                                    },
                                    endHover() {
                                        clearInterval(this.timer);
                                        this.isFormal = true;
                                    }
                                }"
                                @mouseenter="startHover()"
                                @mouseleave="endHover()"
                                class="group bg-white rounded-3xl p-6 border border-blue-300 ring-4 ring-blue-50 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full max-w-sm">
                                
                                <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100">
                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Formal'">

                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                </div>

                                <div class="text-center space-y-1">
                                    <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">{{ $m['role'] }}</span>
                                    <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $m['name'] }}</h3>
                                </div>

                                @if(!empty($m['tupoksi']))
                                    <div class="mt-4 pt-4 border-t border-slate-100 text-left">
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

                {{-- Jajaran BPH --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
                    @foreach($currentMembers as $m)
                        @if($m['division'] === 'koordinator' && $m['role'] !== 'Koordinator')
                            <div 
                                x-data="{ 
                                    isFormal: true, 
                                    timer: null,
                                    startHover() {
                                        this.isFormal = false;
                                        this.timer = setInterval(() => {
                                            this.isFormal = !this.isFormal;
                                        }, 1500);
                                    },
                                    endHover() {
                                        clearInterval(this.timer);
                                        this.isFormal = true;
                                    }
                                }"
                                @mouseenter="startHover()"
                                @mouseleave="endHover()"
                                class="group bg-white rounded-3xl p-6 border border-slate-100 shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                                
                                <div class="relative w-full h-64 rounded-2xl overflow-hidden mb-5 bg-slate-100">
                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Formal'">

                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                         class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                </div>

                                <div class="text-center space-y-1">
                                    <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">{{ $m['role'] }}</span>
                                    <h3 class="text-base font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $m['name'] }}</h3>
                                </div>

                                @if(!empty($m['tupoksi']))
                                    <div class="mt-4 pt-4 border-t border-slate-100 text-left">
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

                {{-- Divisi (PSDM, KOMWIRA, PPPM) --}}
                @php
                    $kadiv = collect($currentMembers)->first(fn($m) => $m['division'] === $div['id']);
                @endphp

                @if($kadiv)
                    {{-- Kepala Divisi di Atas --}}
                    <div class="flex justify-center">
                        <div 
                            x-data="{ 
                                isFormal: true, 
                                timer: null,
                                startHover() {
                                    this.isFormal = false;
                                    this.timer = setInterval(() => {
                                        this.isFormal = !this.isFormal;
                                    }, 1500);
                                },
                                endHover() {
                                    clearInterval(this.timer);
                                    this.isFormal = true;
                                }
                            }"
                            @mouseenter="startHover()"
                            @mouseleave="endHover()"
                            class="group bg-white rounded-3xl p-6 border border-blue-300 ring-4 ring-blue-50 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden w-full max-w-sm">
                            
                            <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100">
                                <img src="{{ asset($kadiv['photo_primary']) }}" alt="{{ $kadiv['name'] }}"
                                     :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                     class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Formal'">

                                <img src="{{ asset($kadiv['photo_secondary']) }}" alt="{{ $kadiv['name'] }} Pose"
                                     :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                     class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                            </div>

                            <div class="text-center space-y-1">
                                <span class="text-[11px] font-bold text-[#334EAC] uppercase tracking-wider block">Kepala Divisi</span>
                                <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors">{{ $kadiv['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Anggota Divisi di Bawahnya --}}
                <div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-start">
                        @foreach($currentMembers as $m)
                            @if($m['division'] === $div['id'] && $m['id'] !== ($kadiv['id'] ?? null))
                                <div 
                                    x-data="{ 
                                        isFormal: true, 
                                        timer: null,
                                        startHover() {
                                            this.isFormal = false;
                                            this.timer = setInterval(() => {
                                                this.isFormal = !this.isFormal;
                                            }, 1500);
                                        },
                                        endHover() {
                                            clearInterval(this.timer);
                                            this.isFormal = true;
                                        }
                                    }"
                                    @mouseenter="startHover()"
                                    @mouseleave="endHover()"
                                    class="group bg-white rounded-3xl p-6 border border-slate-100 shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative overflow-hidden">
                                    
                                    <div class="relative w-full h-72 rounded-2xl overflow-hidden mb-5 bg-slate-100">
                                        <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                             :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                             class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                             onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Formal'">

                                        <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                             :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                             class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out"
                                             onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                    </div>

                                    <div class="text-center space-y-1">
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

</section>