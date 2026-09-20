@props([
    'infoCorner' => collect(),
])

<section class="relative w-full max-w-[1440px] px-6 lg:px-12 py-12 md:py-16 mx-auto overflow-hidden" aria-labelledby="info-corner-title"
         x-data="{
            openModal: false,
            activeInfo: null,
            openDetail(item) {
                this.activeInfo = item;
                this.openModal = true;
                document.body.classList.add('overflow-hidden');
            },
            closeDetail() {
                this.openModal = false;
                this.activeInfo = null;
                document.body.classList.remove('overflow-hidden');
            }
         }"
         @keydown.escape.window="closeDetail()">

    {{-- Header Section --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4 border-b border-slate-200/80 pb-6">
        <div>
            <h2 id="info-corner-title" class="text-2xl sm:text-3xl md:text-4xl font-black text-slate-900 tracking-tight">
                Pojok Informasi Terkini Mahasiswa
            </h2>
        </div>
        <p class="text-xs sm:text-sm font-medium text-slate-500 max-w-md leading-relaxed md:text-right">
            Akses cepat pengumuman resmi, jadwal praktikum, dan panduan akademik Unitas Sistem Informasi.
        </p>
    </div>

    {{-- Cards Grid (12 Columns Presisi) --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8">
        @forelse($infoCorner as $item)
            @php
                $itemPayload = [
                    'id' => $item->id,
                    'title' => $item->title,
                    'category' => $item->category,
                    'excerpt' => $item->excerpt,
                    'content' => $item->content,
                    'image' => $item->image_path ? asset('storage/' . $item->image_path) : null,
                    'date' => $item->created_at ? $item->created_at->format('d M Y') : null,
                ];
            @endphp

            <article class="lg:col-span-6 group relative rounded-3xl p-6 sm:p-8 bg-white border border-slate-200 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:border-[#334EAC] transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between overflow-hidden cursor-pointer"
                     @click="openDetail({{ Illuminate\Support\Js::from($itemPayload) }})">
                
                {{-- Accent Top Bar --}}
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] transition-all duration-300 origin-center scale-x-75 group-hover:scale-x-100"></div>

                <div class="space-y-3 pt-1">
                    {{-- Title --}}
                    <h3 class="text-lg sm:text-xl font-black text-slate-900 tracking-tight leading-snug group-hover:text-[#334EAC] transition-colors line-clamp-2">
                        {{ $item->title }}
                    </h3>

                    {{-- Excerpt --}}
                    <p class="text-slate-500 text-xs sm:text-sm leading-relaxed line-clamp-3 font-medium">
                        {{ $item->excerpt }}
                    </p>
                </div>

                {{-- Card Footer --}}
                <div class="pt-5 mt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs text-slate-400 font-semibold">
                        {{ $item->created_at ? $item->created_at->format('d M Y') : 'Update Terkini' }}
                    </span>

                    <div class="inline-flex items-center gap-1.5 text-xs font-black text-[#334EAC]">
                        <span>Lihat Detail</span>
                        <span class="transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
                    </div>
                </div>
            </article>
        @empty
            <div class="lg:col-span-12 rounded-3xl p-10 bg-white border border-slate-200 text-center space-y-3 shadow-xs">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-blue-50 text-[#334EAC] flex items-center justify-center border border-blue-100 font-black">
                    i
                </div>
                <h3 class="text-base font-bold text-slate-800">Belum Ada Informasi Aktif</h3>
                <p class="text-xs text-slate-400 max-w-sm mx-auto">
                    Informasi penting dan jadwal praktikum akan dipublikasikan di sini secara otomatis.
                </p>
            </div>
        @endforelse
    </div>

    {{-- Detail Modal --}}
    <div x-show="openModal"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-slate-900/60 backdrop-blur-xs">

        <div @click.outside="closeDetail()"
             class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto rounded-3xl bg-white border border-slate-200 text-slate-800 shadow-2xl p-6 sm:p-8 space-y-6">

            {{-- Close Button --}}
            <button type="button"
                    @click="closeDetail()"
                    class="absolute top-6 right-6 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 hover:text-slate-800 flex items-center justify-center transition-all cursor-pointer font-bold">
                &times;
            </button>

            {{-- Header Modal --}}
            <div class="space-y-2 pr-8">
                <h3 class="text-xl sm:text-2xl font-black text-slate-900 leading-snug" x-text="activeInfo?.title"></h3>
                <p class="text-xs font-bold text-slate-400" x-text="activeInfo?.date ? 'Dipublikasikan pada ' + activeInfo.date : ''"></p>
            </div>

            {{-- Image attachment if present --}}
            <template x-if="activeInfo?.image">
                <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50 max-h-80 flex items-center justify-center">
                    <img :src="activeInfo.image" :alt="activeInfo.title" class="w-full h-auto max-h-80 object-cover">
                </div>
            </template>

            {{-- Content Section --}}
            <div class="space-y-4 text-slate-700 text-xs sm:text-sm leading-relaxed">
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 text-slate-600 font-semibold leading-relaxed"
                     x-text="activeInfo?.excerpt">
                </div>

                <div class="whitespace-pre-line font-normal text-slate-700 space-y-3 border-t border-slate-100 pt-4"
                     x-text="activeInfo?.content ? activeInfo.content : 'Tidak ada penjelasan tambahan untuk informasi ini.'">
                </div>
            </div>

            {{-- Modal Footer --}}
            <div class="pt-4 border-t border-slate-100 flex justify-end">
                <button type="button"
                        @click="closeDetail()"
                        class="px-6 py-2.5 rounded-full bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold transition-all cursor-pointer">
                    Tutup Informasi
                </button>
            </div>
        </div>
    </div>
</section>