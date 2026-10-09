@php
$periods = [
    ['id' => '2024-2025', 'label' => '2024/25'],
    ['id' => '2025-2026', 'label' => '2025/26'],
    ['id' => '2026-2027', 'label' => '2026/27']
];

$defaultPeriod = '2025-2026';

$divisionalCovers = [
    '2025-2026' => [
        'koordinator' => asset('images/divisi/2025/koordinator-group.jpg'),
        'psdm' => asset('images/divisi/2025/psdm-group.jpg'),
        'komwira' => asset('images/divisi/2025/komwira-group.jpg'),
        'pppm' => asset('images/divisi/2025/pppm-group.jpg'),
    ],
    '2026-2027' => [
        'koordinator' => asset('images/divisi/2026/koordinator-group.jpg'),
        'psdm' => asset('images/divisi/2026/psdm-group.jpg'),
        'komwira' => asset('images/divisi/2026/komwira-group.jpg'),
        'pppm' => asset('images/divisi/2026/pppm-group.jpg'),
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

<div class="relative w-full min-h-screen bg-white text-slate-800"
     id="struktur"
     x-data="{ 
         selectedPeriod: '{{ $defaultPeriod }}', 
         activeDiv: 'koordinator',
         covers: {{ json_encode($divisionalCovers) }}
      }"
     x-init="$watch('selectedPeriod', value => { activeDiv = 'koordinator'; })">

    <style>[x-cloak] { display: none !important; }</style>

    {{-- Header with dark glass overlay and white fade --}}
    <section class="relative isolate overflow-hidden bg-slate-950 pt-28 pb-40 md:pt-36 md:pb-44">
        <img src="{{ asset('images/divisi/2025/koordinator-group.jpg') }}"
             :src="covers[selectedPeriod] && covers[selectedPeriod][activeDiv] ? covers[selectedPeriod][activeDiv] : '{{ asset('images/divisi/2025/koordinator-group.jpg') }}'"
             alt=""
             class="absolute inset-0 -z-20 size-full object-cover object-[center_30%] opacity-60">
        <div class="absolute inset-0 -z-10 bg-linear-to-b from-slate-950/90 via-slate-950/70 to-slate-950/60 md:from-slate-950/75 md:via-slate-950/55"></div>
        <div class="absolute inset-x-0 bottom-0 -z-10 h-32 bg-linear-to-b from-transparent to-white"></div>

        <div class="relative mx-auto max-w-7xl px-4 text-center md:px-8">
            <h1 class="text-4xl font-semibold tracking-[-0.03em] text-balance text-white drop-shadow-[0_2px_12px_rgba(0,0,0,0.5)] sm:text-5xl md:text-6xl">Struktural Organisasi Unitas SI</h1>
            <p class="mx-auto mt-4 max-w-md text-base text-white/90 text-balance md:max-w-2xl">Mengenal jajaran pengurus, pembagian divisi, dan tugas pokok pengurus Unitas Sistem Informasi Universitas Indraprasta PGRI.</p>

            {{-- Periode Control --}}
            <div class="mt-6 flex items-center justify-center gap-3">
                <span class="text-xs font-semibold uppercase tracking-wider text-white/80">PERIODE:</span>
                <select x-model="selectedPeriod"
                        class="rounded-full border border-white/30 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-[#334EAC] cursor-pointer">
                    @foreach($periods as $p)
                        <option value="{{ $p['id'] }}" class="bg-slate-900 text-white font-medium">{{ $p['label'] }}</option>
                    @endforeach
                </select>
            </div>

            {{-- FIX D: Division Tabs in Header --}}
            <div class="mt-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-center">
                @foreach($allStructureData as $pKey => $pData)
                    <div x-show="selectedPeriod === '{{ $pKey }}'" class="w-full flex justify-center" x-cloak>
                        <div role="tablist" aria-label="Pilih divisi"
                             class="-mx-4 flex snap-x snap-mandatory gap-2 overflow-x-auto px-4 pb-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden md:mx-0 md:flex-wrap md:justify-center md:overflow-visible md:px-0 [mask-image:linear-gradient(to_right,black_90%,transparent)] md:[mask-image:none]">
                            @foreach($pData['divisions'] as $div)
                                <button type="button" role="tab" @click="activeDiv = '{{ $div['id'] }}'"
                                        :aria-selected="(activeDiv === '{{ $div['id'] }}').toString()"
                                        :class="activeDiv === '{{ $div['id'] }}'
                                            ? 'border-[#334EAC] bg-[#334EAC] text-white shadow-lg shadow-[#334EAC]/25'
                                            : 'border-white/40 bg-white/10 text-white backdrop-blur-xl hover:bg-white/20'"
                                        class="snap-start shrink-0 whitespace-nowrap rounded-full border px-4 py-2.5 text-sm font-medium transition duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#334EAC] cursor-pointer">
                                    {{ $div['name'] }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FIX B & E: White Body Surface Container --}}
    <main class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 py-10 md:py-16 space-y-10 md:space-y-12">

        {{-- ========================================== --}}
        {{-- KONDISI A: LOGIC LAYOUT PERIODE 2024-2025 --}}
        {{-- ========================================== --}}
        <div x-show="selectedPeriod === '2024-2025'" class="space-y-10 md:space-y-12" x-cloak>
            @php
            $data24 = $allStructureData['2024-2025'];
            @endphp

            @foreach($data24['divisions'] as $div)
            <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-8 md:space-y-10" x-cloak>
                @if($div['id'] === 'koordinator')
                    {{-- Koordinator Utama Featured Card --}}
                    @foreach($data24['members'] as $m)
                    @if($m['division'] === 'koordinator' && $m['role'] === 'Koordinator')
                    <div class="flex justify-center">
                        <div class="group relative overflow-hidden rounded-2xl border border-[#334EAC]/40 ring-2 ring-[#334EAC]/20 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/60 hover:shadow-lg md:p-4 col-span-2 mx-auto w-full max-w-[16rem] md:col-span-3 md:max-w-xs lg:col-span-4">
                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                            {{-- FIX A & F: Photo Wrapper --}}
                            <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                 x-data="{
                                     isFormal: true,
                                     timer: null,
                                     startHover() {
                                         this.isFormal = false;
                                         this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                     },
                                     endHover() {
                                         clearInterval(this.timer);
                                         this.timer = null;
                                         this.isFormal = true;
                                     }
                                 }"
                                 @mouseenter="startHover()"
                                 @mouseleave="endHover()"
                                 x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                     :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                     :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                            </div>

                            {{-- FIX B: Name Block --}}
                            <div class="mt-3 space-y-0.5 text-left">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                            </div>

                            {{-- FIX C: Detail Tugas --}}
                            @if($m['division'] === 'koordinator' && !empty($m['tupoksi']))
                            <div class="mt-3 border-t border-slate-200 pt-3">
                                <p class="mb-2 text-[10px] font-semibold uppercase tracking-wider text-slate-500">Detail Tugas</p>
                                <ul class="list-disc space-y-1.5 pl-4 text-xs leading-relaxed text-slate-600 marker:text-[#334EAC]">
                                    @foreach($m['tupoksi'] as $tup)
                                    <li>{{ $tup }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                    @endforeach

                    {{-- Jajaran BPH Grid --}}
                    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-5 lg:grid-cols-4 items-start">
                        @foreach($data24['members'] as $m)
                        @if($m['division'] === 'koordinator' && $m['role'] !== 'Koordinator')
                        <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/40 hover:shadow-lg md:p-4">
                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                            <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                 x-data="{
                                     isFormal: true,
                                     timer: null,
                                     startHover() {
                                         this.isFormal = false;
                                         this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                     },
                                     endHover() {
                                         clearInterval(this.timer);
                                         this.timer = null;
                                         this.isFormal = true;
                                     }
                                 }"
                                 @mouseenter="startHover()"
                                 @mouseleave="endHover()"
                                 x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                     :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                     :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                            </div>

                            <div class="mt-3 space-y-0.5 text-left">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                            </div>

                            @if($m['division'] === 'koordinator' && !empty($m['tupoksi']))
                            <div class="mt-3 border-t border-slate-200 pt-3">
                                <p class="mb-2 text-[10px] font-semibold uppercase tracking-wider text-slate-500">Detail Tugas</p>
                                <ul class="list-disc space-y-1.5 pl-4 text-xs leading-relaxed text-slate-600 marker:text-[#334EAC]">
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
                    {{-- Divisi Standar 2024-2025 --}}
                    @php
                    $kadiv = collect($data24['members'])->first(fn($m) => $m['division'] === $div['id'] && (stripos($m['role'], 'Kepala') !== false || stripos($m['role'], 'Kadiv') !== false));
                    if(!$kadiv) {
                        $kadiv = collect($data24['members'])->first(fn($m) => $m['division'] === $div['id']);
                    }
                    @endphp

                    @if($kadiv)
                    <div class="flex justify-center">
                        @php $m = $kadiv; @endphp
                        <div class="group relative overflow-hidden rounded-2xl border border-[#334EAC]/40 ring-2 ring-[#334EAC]/20 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/60 hover:shadow-lg md:p-4 col-span-2 mx-auto w-full max-w-[16rem] md:col-span-3 md:max-w-xs lg:col-span-4">
                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                            <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                 x-data="{
                                     isFormal: true,
                                     timer: null,
                                     startHover() {
                                         this.isFormal = false;
                                         this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                     },
                                     endHover() {
                                         clearInterval(this.timer);
                                         this.timer = null;
                                         this.isFormal = true;
                                     }
                                 }"
                                 @mouseenter="startHover()"
                                 @mouseleave="endHover()"
                                 x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                     :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                     :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                            </div>

                            <div class="mt-3 space-y-0.5 text-left">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Anggota Divisi Grid --}}
                    <div class="grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-5 lg:grid-cols-4 items-start">
                        @foreach($data24['members'] as $m)
                        @if($m['division'] === $div['id'] && $m['id'] !== ($kadiv['id'] ?? null))
                        <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/40 hover:shadow-lg md:p-4">
                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                            <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                 x-data="{
                                     isFormal: true,
                                     timer: null,
                                     startHover() {
                                         this.isFormal = false;
                                         this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                     },
                                     endHover() {
                                         clearInterval(this.timer);
                                         this.timer = null;
                                         this.isFormal = true;
                                     }
                                 }"
                                 @mouseenter="startHover()"
                                 @mouseleave="endHover()"
                                 x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                     :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                     :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                     class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                     onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                            </div>

                            <div class="mt-3 space-y-0.5 text-left">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                @endif
            </div>
            @endforeach
        </div>

        {{-- ======================================================== --}}
        {{-- KONDISI B: LOGIC LAYOUT PERIODE 2025-2026 & 2026-2027 --}}
        {{-- ======================================================== --}}
        <div x-show="selectedPeriod !== '2024-2025'" class="space-y-10 md:space-y-12" x-cloak>
            @foreach(['2025-2026', '2026-2027'] as $pKey)
            <div x-show="selectedPeriod === '{{ $pKey }}'" class="space-y-10 md:space-y-12" x-cloak>
                @php
                $divs = $allStructureData[$pKey]['divisions'] ?? [];
                $members = $allStructureData[$pKey]['members'] ?? [];
                @endphp

                @foreach($divs as $div)
                <div x-show="activeDiv === '{{ $div['id'] }}'" class="space-y-8 md:space-y-10" x-cloak>
                    {{-- FIX E: Tupoksi Utama Divisi --}}
                    @if(isset($divisionInfo[$div['id']]))
                    <div class="max-w-4xl mx-auto space-y-3">
                        <h3 class="text-lg md:text-xl font-bold text-center tracking-tight text-slate-900">
                            {{ $divisionInfo[$div['id']]['name'] }}
                        </h3>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 md:p-8 shadow-sm">
                            <span class="text-xs font-semibold uppercase tracking-wider text-[#334EAC] block mb-3">Tupoksi Utama Divisi</span>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2.5 text-sm text-slate-600 list-disc pl-5 leading-relaxed marker:text-[#334EAC]">
                                @foreach($divisionInfo[$div['id']]['tupoksi'] as $tup)
                                <li>{{ $tup }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    @if($div['id'] === 'koordinator')
                        {{-- Koordinator Utama Featured Card --}}
                        @foreach($members as $m)
                        @if($m['division'] === 'koordinator' && $m['role'] === 'Koordinator')
                        <div class="flex justify-center">
                            <div class="group relative overflow-hidden rounded-2xl border border-[#334EAC]/40 ring-2 ring-[#334EAC]/20 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/60 hover:shadow-lg md:p-4 col-span-2 mx-auto w-full max-w-[16rem] md:col-span-3 md:max-w-xs lg:col-span-4">
                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                {{-- FIX A & F: Photo Wrapper --}}
                                <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                     x-data="{
                                         isFormal: true,
                                         timer: null,
                                         startHover() {
                                             this.isFormal = false;
                                             this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                         },
                                         endHover() {
                                             clearInterval(this.timer);
                                             this.timer = null;
                                             this.isFormal = true;
                                         }
                                     }"
                                     @mouseenter="startHover()"
                                     @mouseleave="endHover()"
                                     x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                </div>

                                {{-- FIX B: Name Block --}}
                                <div class="mt-3 space-y-0.5 text-left">
                                    <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                    <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                                </div>

                                {{-- FIX C: Detail Tugas --}}
                                @if($m['division'] === 'koordinator' && !empty($m['tupoksi']))
                                <div class="mt-3 border-t border-slate-200 pt-3">
                                    <p class="mb-2 text-[10px] font-semibold uppercase tracking-wider text-slate-500">Detail Tugas</p>
                                    <ul class="list-disc space-y-1.5 pl-4 text-xs leading-relaxed text-slate-600 marker:text-[#334EAC]">
                                        @foreach($m['tupoksi'] as $tup)
                                        <li>{{ $tup }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                        @endforeach

                        {{-- Jajaran BPH Grid --}}
                        <div class="grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-5 lg:grid-cols-4 items-start">
                            @foreach($members as $m)
                            @if($m['division'] === 'koordinator' && $m['role'] !== 'Koordinator')
                            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/40 hover:shadow-lg md:p-4">
                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                     x-data="{
                                         isFormal: true,
                                         timer: null,
                                         startHover() {
                                             this.isFormal = false;
                                             this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                         },
                                         endHover() {
                                             clearInterval(this.timer);
                                             this.timer = null;
                                             this.isFormal = true;
                                         }
                                     }"
                                     @mouseenter="startHover()"
                                     @mouseleave="endHover()"
                                     x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                </div>

                                <div class="mt-3 space-y-0.5 text-left">
                                    <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                    <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                                </div>

                                @if($m['division'] === 'koordinator' && !empty($m['tupoksi']))
                                <div class="mt-3 border-t border-slate-200 pt-3">
                                    <p class="mb-2 text-[10px] font-semibold uppercase tracking-wider text-slate-500">Detail Tugas</p>
                                    <ul class="list-disc space-y-1.5 pl-4 text-xs leading-relaxed text-slate-600 marker:text-[#334EAC]">
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
                            @php $m = $kadiv; @endphp
                            <div class="group relative overflow-hidden rounded-2xl border border-[#334EAC]/40 ring-2 ring-[#334EAC]/20 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/60 hover:shadow-lg md:p-4 col-span-2 mx-auto w-full max-w-[16rem] md:col-span-3 md:max-w-xs lg:col-span-4">
                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                     x-data="{
                                         isFormal: true,
                                         timer: null,
                                         startHover() {
                                             this.isFormal = false;
                                             this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                         },
                                         endHover() {
                                             clearInterval(this.timer);
                                             this.timer = null;
                                             this.isFormal = true;
                                         }
                                     }"
                                     @mouseenter="startHover()"
                                     @mouseleave="endHover()"
                                     x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                </div>

                                <div class="mt-3 space-y-0.5 text-left">
                                    <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                    <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                                </div>
                            </div>
                        </div>
                        @endif

                        {{-- Anggota Divisi Grid --}}
                        <div class="grid grid-cols-2 gap-3 md:grid-cols-3 md:gap-5 lg:grid-cols-4 items-start">
                            @foreach($members as $m)
                            @if($m['division'] === $div['id'] && $m['id'] !== ($kadiv['id'] ?? null))
                            <div class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-3 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#334EAC]/40 hover:shadow-lg md:p-4">
                                <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                                <div class="relative aspect-[3/4] w-full overflow-hidden rounded-xl border border-slate-200 bg-slate-100"
                                     x-data="{
                                         isFormal: true,
                                         timer: null,
                                         startHover() {
                                             this.isFormal = false;
                                             this.timer = setInterval(() => { this.isFormal = !this.isFormal; }, 1500);
                                         },
                                         endHover() {
                                             clearInterval(this.timer);
                                             this.timer = null;
                                             this.isFormal = true;
                                         }
                                     }"
                                     @mouseenter="startHover()"
                                     @mouseleave="endHover()"
                                     x-init="$el.addEventListener('DOMNodeRemoved', () => clearInterval(timer))">
                                    <img src="{{ asset($m['photo_primary']) }}" alt="{{ $m['name'] }}"
                                         :class="isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-110'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/334EAC/FFF?text=Foto+Normal'">
                                    <img src="{{ asset($m['photo_secondary']) }}" alt="{{ $m['name'] }} Pose"
                                         :class="!isFormal ? 'opacity-100 scale-100' : 'opacity-0 scale-95'"
                                         class="absolute inset-0 size-full object-cover object-[center_20%] transition-all duration-700 ease-in-out"
                                         onerror="this.src='https://placehold.co/400x500/0284C7/FFF?text=Foto+Pose'">
                                </div>

                                <div class="mt-3 space-y-0.5 text-left">
                                    <span class="block text-[10px] font-semibold uppercase tracking-wider text-[#334EAC] md:text-[11px]">{{ $m['role'] }}</span>
                                    <h3 class="text-sm font-semibold leading-snug text-slate-900 break-words md:text-base">{{ $m['name'] }}</h3>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </main>
</div>
