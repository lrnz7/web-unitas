<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pusat Informasi Akademis, KRS, Biaya Kuliah, Ujian, dan Ensiklopedi Sistem Informasi Unindra">

    <title>Pusat Informasi Akademis - Unitas Sistem Informasi</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-16 px-6 max-w-7xl mx-auto w-full space-y-10" 
          x-data="{ 
              activeTab: 'kurikulum', 
              search: '', 
              activeModal: null,
              copied: false,
              allInfo: {{ Illuminate\Support\Js::from($informasi->values()) }},
              init() {
                  const urlParams = new URLSearchParams(window.location.search);
                  const openId = urlParams.get('open');
                  if (openId) {
                      const target = this.allInfo.find(i => i.id == openId);
                      if (target) {
                          this.activeModal = target;
                          if (target.category === 'Panduan KRS & Praktikum') this.activeTab = 'krs';
                          else if (target.category === 'Biaya & Syarat Ujian') this.activeTab = 'biaya';
                          else if (target.category === 'Ensiklopedi Sisfor') this.activeTab = 'ensiklopedi';
                      }
                  }
              },
              copyLink(id) {
                  if (!id) return;
                  const link = `${window.location.origin}${window.location.pathname}?open=${id}`;
                  navigator.clipboard.writeText(link).then(() => {
                      this.copied = true;
                      setTimeout(() => this.copied = false, 2000);
                  });
              },
              matchesSearch(info) {
                  if (this.search === '') return true;
                  const haystack = `${info.title || ''} ${info.excerpt || ''} ${info.content || ''}`.toLowerCase();
                  return haystack.includes(this.search.toLowerCase());
              },
              get searchResults() {
                  if (this.search === '') return [];
                  return this.allInfo.filter(i => this.matchesSearch(i));
              },
              categoryMeta(category) {
                  if (category === 'Panduan KRS & Praktikum') return { label: 'Panduan KRS', color: 'text-[#334EAC] bg-blue-50 border-blue-100' };
                  if (category === 'Biaya & Syarat Ujian') return { label: 'Biaya & Ujian', color: 'text-amber-600 bg-amber-50 border-amber-100' };
                  if (category === 'Ensiklopedi Sisfor') return { label: 'Ensiklopedi', color: 'text-indigo-600 bg-indigo-50 border-indigo-100' };
                  return { label: category || 'Info', color: 'text-slate-600 bg-slate-100 border-slate-200' };
              }
          }">
        
        <!-- Header Section -->
        <section class="text-center space-y-3">
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Pusat Informasi Akademis
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                Temukan struktur kurikulum, panduan KRS, rincian biaya, aturan ujian, dan ensiklopedi kampus dalam satu pintu.
            </p>
        </section>

        <!-- Instant Search Bar -->
        <div class="max-w-2xl mx-auto relative z-10">
            <input type="text" x-model="search" placeholder="Cari info jadwal lab, syarat ujian, atau istilah kampus..."
                   class="w-full bg-white border border-slate-200 rounded-full px-6 py-4 text-sm font-bold text-slate-800 focus:outline-none focus:border-[#334EAC] focus:ring-4 focus:ring-blue-500/10 transition-all shadow-sm pl-14">
            <svg class="w-5 h-5 absolute left-5 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>

        <!-- Dynamic Navigation Tabs -->
        <div class="p-1.5 bg-slate-200/60 rounded-3xl md:rounded-full max-w-4xl mx-auto w-full">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1.5 w-full">
                <button @click="activeTab = 'kurikulum'; search = ''" 
                        :class="activeTab === 'kurikulum' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center cursor-pointer">
                    Kurikulum & Materi
                </button>
                <button @click="activeTab = 'krs'; search = ''" 
                        :class="activeTab === 'krs' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center cursor-pointer">
                    Panduan KRS
                </button>
                <button @click="activeTab = 'biaya'; search = ''" 
                        :class="activeTab === 'biaya' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center cursor-pointer">
                    Biaya & Ujian
                </button>
                <button @click="activeTab = 'ensiklopedi'; search = ''" 
                        :class="activeTab === 'ensiklopedi' ? 'bg-[#334EAC] text-white shadow-md font-black' : 'text-slate-600 hover:text-slate-900 font-bold hover:bg-slate-300/40'"
                        class="w-full py-3 rounded-2xl md:rounded-full text-xs md:text-sm transition-all text-center cursor-pointer">
                    Ensiklopedi Sisfor
                </button>
            </div>
        </div>

        <!-- HASIL PENCARIAN GLOBAL (lintas kategori, aktif saat search diisi) -->
        <section x-show="search !== ''" x-transition x-cloak class="space-y-6">
            <p class="text-xs font-bold text-slate-500 px-1">
                Menampilkan <span x-text="searchResults.length"></span> hasil untuk "<span x-text="search"></span>" di semua kategori
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="info in searchResults" :key="info.id">
                    <div class="relative overflow-hidden p-6 rounded-3xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-slate-500/10 hover:border-slate-400 group flex flex-col justify-between cursor-pointer"
                         @click="activeModal = info">
                        <div class="absolute top-0 left-0 w-full h-1 bg-slate-400 transition-all duration-300 origin-center scale-x-75 group-hover:scale-x-100"></div>

                        <div class="space-y-3 pt-1">
                            <h3 class="font-black text-slate-900 text-base leading-snug group-hover:text-slate-700 transition-colors line-clamp-2" x-text="info.title"></h3>
                            <p class="text-xs text-slate-500 leading-relaxed line-clamp-3" x-text="info.excerpt"></p>
                        </div>

                        <div class="pt-4 mt-5 border-t border-slate-100 flex items-center justify-between text-xs font-black text-slate-700">
                            <span>Lihat Detail</span>
                            <span class="transition-transform duration-300 group-hover:translate-x-1.5">&rarr;</span>
                        </div>
                    </div>
                </template>

                <div x-show="searchResults.length === 0" class="col-span-full p-12 text-center bg-white rounded-3xl border border-slate-200 space-y-2">
                    <p class="text-sm text-slate-500 font-bold">Tidak ada informasi yang cocok dengan pencarianmu.</p>
                    <p class="text-xs text-slate-400">Coba kata kunci lain, misalnya nama mata kuliah atau istilah kampus.</p>
                </div>
            </div>
        </section>

        <!-- TAB 1: KURIKULUM & MATERI PERKULIAHAN -->
        <section x-show="search === '' && activeTab === 'kurikulum'" x-transition x-cloak class="space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                @foreach ($curriculum as $sem)
                    @php
                        $totalSksSemester = collect($sem['courses'])->sum('total_sks');
                    @endphp
                    
                    <div class="relative overflow-hidden rounded-3xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 hover:border-[#334EAC] group flex flex-col">
                        <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                        <div class="px-7 py-5 flex items-center justify-between border-b bg-slate-50 border-slate-100 relative z-10">
                            <h3 class="text-lg font-black tracking-tight uppercase text-slate-900 group-hover:text-[#334EAC] transition-colors">
                                Semester {{ $sem['semester'] }}
                            </h3>
                            <span class="text-xs font-extrabold px-3.5 py-1.5 rounded-full bg-blue-50 text-[#334EAC] border border-blue-100">
                                {{ $totalSksSemester }} Total SKS
                            </span>
                        </div>

                        <div class="p-5 overflow-x-auto relative z-10">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="text-[11px] font-black uppercase text-slate-400 border-b border-slate-100">
                                        <th class="py-2 px-3">Kode</th>
                                        <th class="py-2 px-3">Mata Kuliah</th>
                                        <th class="py-2 px-3 text-center">Komponen SKS</th>
                                        <th class="py-2 px-3 text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-xs">
                                    @foreach ($sem['courses'] as $course)
                                        <tr class="hover:bg-blue-50/70 transition-colors">
                                            <td class="py-3 px-3 font-mono font-bold text-slate-400">{{ $course['code'] }}</td>
                                            <td class="py-3 px-3 font-bold text-slate-800">{{ $course['name'] }}</td>
                                            <td class="py-3 px-3 text-center">
                                                <div class="flex flex-wrap items-center justify-center gap-1">
                                                    @if ($course['teori'] > 0)
                                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-blue-50 text-blue-700 border border-blue-100">{{ $course['teori'] }} SKS Teori</span>
                                                    @endif
                                                    @if ($course['praktikum'] > 0)
                                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">{{ $course['praktikum'] }} SKS Praktikum</span>
                                                    @endif
                                                    @if ($course['praktek'] > 0)
                                                        <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-100">{{ $course['praktek'] }} SKS Praktek</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="py-3 px-3 text-center">
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-lg font-black text-xs bg-slate-100 text-slate-700">
                                                    {{ $course['total_sks'] }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="px-6 py-3.5 bg-slate-50/80 border-t border-slate-100 flex items-center justify-between text-xs relative z-10 mt-auto">
                            <span class="text-slate-500 font-medium">Materi Perkuliahan Semester {{ $sem['semester'] }}</span>
                            @if (!empty($sem['module_path']))
                                <a href="{{ asset('storage/' . $sem['module_path']) }}" download
                                   class="inline-flex items-center gap-1.5 font-bold text-white bg-[#334EAC] hover:bg-blue-800 px-3.5 py-1.5 rounded-full transition-all shadow-sm">
                                    &darr; Download Modul
                                </a>
                            @else
                                <span class="font-bold text-[#334EAC] cursor-not-allowed opacity-60">
                                    Download Modul (Soon)
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- TAB 2: PANDUAN KRS & PRAKTIKUM (SOLUSI B + C: BLUE ACCENT) -->
        @php
            $krsData = $informasi->where('category', 'Panduan KRS & Praktikum');
        @endphp
        <section x-show="search === '' && activeTab === 'krs'" x-transition x-cloak class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if ($krsData->count() > 0)
                    @foreach ($krsData as $info)
                        <div class="relative overflow-hidden p-6 rounded-3xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-blue-500/10 hover:border-[#334EAC] group flex flex-col justify-between cursor-pointer"
                             @click="activeModal = {{ Illuminate\Support\Js::from($info) }}">
                            
                            <!-- Accent Top Bar -->
                            <div class="absolute top-0 left-0 w-full h-1 bg-[#334EAC] transition-all duration-300 origin-center scale-x-75 group-hover:scale-x-100"></div>

                            <div class="space-y-3 pt-1">
                                <h3 class="font-black text-slate-900 text-base leading-snug group-hover:text-[#334EAC] transition-colors line-clamp-2">
                                    {{ $info->title }}
                                </h3>
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">
                                    {{ $info->excerpt }}
                                </p>
                            </div>

                            <div class="pt-4 mt-5 border-t border-slate-100 flex items-center justify-between text-xs font-black text-[#334EAC]">
                                <span>Lihat Detail Panduan</span>
                                <span class="transition-transform duration-300 group-hover:translate-x-1.5">&rarr;</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full p-12 text-center bg-white rounded-3xl border border-slate-200 space-y-2">
                        <p class="text-sm text-slate-500 font-bold">Belum ada informasi Panduan KRS & Praktikum.</p>
                        <p class="text-xs text-slate-400">Tambahkan data melalui Admin Panel &rarr; Kelola Informasi.</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- TAB 3: BIAYA & SYARAT UJIAN (SOLUSI B + C: AMBER ACCENT) -->
        @php
            $biayaData = $informasi->where('category', 'Biaya & Syarat Ujian');
        @endphp
        <section x-show="search === '' && activeTab === 'biaya'" x-transition x-cloak class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if ($biayaData->count() > 0)
                    @foreach ($biayaData as $info)
                        <div class="relative overflow-hidden p-6 rounded-3xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-amber-500/10 hover:border-amber-500 group flex flex-col justify-between cursor-pointer"
                             @click="activeModal = {{ Illuminate\Support\Js::from($info) }}">
                            
                            <!-- Accent Top Bar -->
                            <div class="absolute top-0 left-0 w-full h-1 bg-amber-500 transition-all duration-300 origin-center scale-x-75 group-hover:scale-x-100"></div>

                            <div class="space-y-3 pt-1">
                                <h3 class="font-black text-slate-900 text-base leading-snug group-hover:text-amber-600 transition-colors line-clamp-2">
                                    {{ $info->title }}
                                </h3>
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">
                                    {{ $info->excerpt }}
                                </p>
                            </div>

                            <div class="pt-4 mt-5 border-t border-slate-100 flex items-center justify-between text-xs font-black text-amber-600">
                                <span>Baca Ketentuan Ujian</span>
                                <span class="transition-transform duration-300 group-hover:translate-x-1.5">&rarr;</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full p-12 text-center bg-white rounded-3xl border border-slate-200 space-y-2">
                        <p class="text-sm text-slate-500 font-bold">Belum ada informasi Biaya & Syarat Ujian.</p>
                        <p class="text-xs text-slate-400">Tambahkan data melalui Admin Panel &rarr; Kelola Informasi.</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- TAB 4: ENSIKLOPEDI SISFOR (SOLUSI B + C: INDIGO ACCENT) -->
        @php
            $ensiklopediData = $informasi->where('category', 'Ensiklopedi Sisfor');
        @endphp
        <section x-show="search === '' && activeTab === 'ensiklopedi'" x-transition x-cloak class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if ($ensiklopediData->count() > 0)
                    @foreach ($ensiklopediData as $info)
                        <div class="relative overflow-hidden p-6 rounded-3xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-indigo-500/10 hover:border-indigo-600 group flex flex-col justify-between cursor-pointer"
                             @click="activeModal = {{ Illuminate\Support\Js::from($info) }}">
                            
                            <!-- Accent Top Bar -->
                            <div class="absolute top-0 left-0 w-full h-1 bg-indigo-600 transition-all duration-300 origin-center scale-x-75 group-hover:scale-x-100"></div>

                            <div class="space-y-3 pt-1">
                                <h3 class="font-black text-slate-900 text-base leading-snug group-hover:text-indigo-600 transition-colors line-clamp-2">
                                    {{ $info->title }}
                                </h3>
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">
                                    {{ $info->excerpt }}
                                </p>
                            </div>

                            <div class="pt-4 mt-5 border-t border-slate-100 flex items-center justify-between text-xs font-black text-indigo-600">
                                <span>Penjelasan Istilah</span>
                                <span class="transition-transform duration-300 group-hover:translate-x-1.5">&rarr;</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full p-12 text-center bg-white rounded-3xl border border-slate-200 space-y-2">
                        <p class="text-sm text-slate-500 font-bold">Belum ada Ensiklopedi Sisfor.</p>
                        <p class="text-xs text-slate-400">Tambahkan data melalui Admin Panel &rarr; Kelola Informasi.</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- GLOBAL MODAL POP-UP (DETAIL BACA INFORMASI + COPY LINK) -->
        <div x-show="activeModal !== null" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             x-cloak
             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs">
            
            <div @click.away="activeModal = null" 
                 class="bg-white rounded-3xl border border-slate-200 max-w-2xl w-full max-h-[85vh] overflow-y-auto p-6 md:p-8 space-y-6 shadow-2xl relative">
                
                <button @click="activeModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-slate-800 font-bold text-lg p-2 rounded-full hover:bg-slate-100 transition-colors cursor-pointer">
                    &times;
                </button>

                <div class="space-y-2 pr-8">
                    <h2 class="text-xl md:text-2xl font-black text-slate-900 leading-snug" x-text="activeModal?.title"></h2>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 text-xs font-semibold text-slate-600 leading-relaxed"
                     x-text="activeModal?.excerpt"></div>

                <template x-if="activeModal?.content">
                    <div class="text-xs md:text-sm text-slate-700 leading-relaxed whitespace-pre-line space-y-3 font-normal border-t border-slate-100 pt-4"
                         x-text="activeModal?.content"></div>
                </template>

                <template x-if="activeModal?.image_path">
                    <div class="space-y-2 pt-2">
                        <p class="text-xs font-bold text-slate-500">Lampiran Infografis / Dokumen:</p>
                        <a :href="'/storage/' + activeModal?.image_path" target="_blank" class="block rounded-2xl overflow-hidden border border-slate-200 hover:opacity-90 transition-opacity">
                            <img :src="'/storage/' + activeModal?.image_path" alt="Lampiran" class="w-full h-auto object-cover max-h-80">
                        </a>
                    </div>
                </template>

                <!-- Modal Footer & Copy Link Button -->
                <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3">
                    <button @click="copyLink(activeModal?.id)"
                            class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 hover:bg-blue-100 text-[#334EAC] font-bold text-xs rounded-full transition-all cursor-pointer border border-blue-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
                        <span x-text="copied ? 'Link Berhasil Disalin! ✓' : 'Salin Link WhatsApp'"></span>
                    </button>

                    <button @click="activeModal = null" class="px-6 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs rounded-full transition-all cursor-pointer">
                        Tutup Informasi
                    </button>
                </div>
            </div>
        </div>

    </main>

    <x-footer />

</body>
</html>