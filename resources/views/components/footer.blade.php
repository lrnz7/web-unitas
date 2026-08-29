<footer class="w-full bg-slate-50 border-t border-slate-200/60 pt-16 pb-8 px-6 lg:px-12 mt-20">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-slate-200/80">
            
            {{-- Kolom 1: Logo & Social Media (4 cols) --}}
            <div class="lg:col-span-4 space-y-5">
                <div class="h-20 w-20 flex items-center justify-center">
                    <img src="{{ asset('images/logo-unitas.png') }}" alt="Logo Unitas SI" class="h-full w-full object-contain">
                </div>
                
                <div class="space-y-3">
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Connect With Us</h4>
                    <div class="flex items-center gap-2.5">
                        {{-- Social Icons --}}
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">Line</a>
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">Fb</a>
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">X</a>
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">Ig</a>
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">Yt</a>
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">Tt</a>
                        <a href="#" class="h-8 w-8 rounded-full bg-slate-100 hover:bg-[#334EAC] hover:text-white flex items-center justify-center text-slate-600 transition-all text-xs font-bold">In</a>
                    </div>
                </div>
            </div>

            {{-- Kolom 2: Site Menu (2 cols) --}}
            <div class="lg:col-span-2 space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Site Menu</h4>
                <ul class="space-y-2 text-xs text-slate-500 font-medium">
                    <li><a href="/#blog" class="hover:text-[#334EAC] transition-colors">Blog</a></li>
                    <li><a href="/#ifree" class="hover:text-[#334EAC] transition-colors">Ifree</a></li>
                    <li><a href="/#iftar" class="hover:text-[#334EAC] transition-colors">Iftar</a></li>
                    <li><a href="/#about" class="hover:text-[#334EAC] transition-colors">About</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Useful Website (3 cols) --}}
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Useful Website</h4>
                <ul class="space-y-2 text-xs text-slate-500 font-medium">
                    <li><a href="https://unindra.ac.id" target="_blank" class="hover:text-[#334EAC] transition-colors underline">Program Studi Sarjana Sistem Informasi Unindra</a></li>
                    <li><a href="https://bak.unindra.ac.id" target="_blank" class="hover:text-[#334EAC] transition-colors underline">Beranda | Biro Administrasi Akademik (BAK) (unindra.ac.id)</a></li>
                </ul>
            </div>

            {{-- Kolom 4: Contact Us (3 cols) --}}
            <div class="lg:col-span-3 space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Contact Us</h4>
                <div class="space-y-2 text-xs text-slate-500 font-medium leading-relaxed">
                    <p><strong class="text-slate-800">Phone:</strong><br />+62 8963-8943-275 (Zahra)</p>
                    <p><strong class="text-slate-800">Address:</strong><br />Jl. Nangka Raya No.58 C, RT.7/RW.5, Tj. Bar., Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12530</p>
                </div>
            </div>

        </div>

        {{-- Bottom Copyright Line --}}
        <div class="pt-8 text-center text-[11px] text-slate-400 font-medium">
            <p>&copy; {{ date('Y') }} Prodi Sistem Informasi &middot; Jl. Raya Tengah No.80, RT.1/RW.3, Gedong, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13760 &middot; sisteminformasi@unindra.ac.id</p>
        </div>
    </div>
</footer>