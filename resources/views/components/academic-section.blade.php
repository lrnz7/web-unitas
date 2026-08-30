<section class="relative w-full max-w-[1440px] px-6 lg:px-12 py-12 mx-auto" id="informasi-akademis">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        
        {{-- Teks & Deskripsi (Kiri - 7 cols) --}}
        <div class="lg:col-span-7 flex flex-col justify-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 leading-tight">
                Panduan Akademis & Kurikulum Program Studi
            </h2>
            <p class="mt-4 text-slate-600 text-sm md:text-base leading-relaxed max-w-xl font-medium">
                Dapatkan akses langsung ke informasi kurikulum, struktur perkuliahan, sebaran mata kuliah per semester, hingga tata cara dan alur pengambilan atribut resmi mahasiswa Sistem Informasi Universitas Indraprasta PGRI.
            </p>
        </div>

        {{-- Action Items (Kanan - 5 cols) --}}
        <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Item 1: Kurikulum SI -->
            <a href="{{ url('/informasi/akademis') }}" 
               class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col justify-between">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                <div class="space-y-3 relative z-10">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#334EAC] flex items-center justify-center font-black text-xl group-hover:scale-110 transition-transform">
                        📚
                    </div>
                    <div>
                        <h3 class="font-extrabold text-base text-slate-900 group-hover:text-[#334EAC] transition-colors">
                            Kurikulum SI
                        </h3>
                        <p class="text-xs text-slate-500 mt-1.5 font-medium leading-relaxed">
                            Cek sebaran mata kuliah wajib, pilihan, dan bobot SKS per semester.
                        </p>
                    </div>
                </div>
                <span class="text-xs font-bold text-[#334EAC] mt-6 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform relative z-10">
                    Lihat Detail &rarr;
                </span>
            </a>

            <!-- Item 2: Pengambilan Atribut -->
            <a href="{{ url('/informasi/atribut') }}" 
               class="relative overflow-hidden p-6 rounded-2xl bg-white border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] group flex flex-col justify-between">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                <div class="space-y-3 relative z-10">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#334EAC] flex items-center justify-center font-black text-xl group-hover:scale-110 transition-transform">
                        👕
                    </div>
                    <div>
                        <h3 class="font-extrabold text-base text-slate-900 group-hover:text-[#334EAC] transition-colors">
                            Info Atribut
                        </h3>
                        <p class="text-xs text-slate-500 mt-1.5 font-medium leading-relaxed">
                            Panduan kelengkapan, jadwal, dan syarat pengambilan atribut mahasiswa.
                        </p>
                    </div>
                </div>
                <span class="text-xs font-bold text-[#334EAC] mt-6 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform relative z-10">
                    Cek Jadwal &rarr;
                </span>
            </a>
        </div>

    </div>
</section>