@props(['variant' => 'light'])

@if($variant === 'dark')
<footer class="w-full relative z-20 bg-slate-950 text-slate-300 border-t border-slate-800 pt-16 pb-8 px-6 mt-0">
    <div class="max-w-7xl mx-auto">
        
        <!-- Baris Utama Footer -->
        <div class="flex flex-wrap justify-between gap-12 pb-12 border-b border-slate-800">
            
            <!-- Kolom 1: Logo & Sosmed -->
            <div class="flex-1 min-w-[260px] max-w-[380px]">
                <div class="h-20 w-20 flex items-center justify-center mb-5">
                    <img src="{{ asset('images/logo-unitas.png') }}" alt="Logo Unitas SI" class="h-full w-full object-contain">
                </div>
                
                <p class="text-xs text-slate-400 font-medium leading-relaxed mb-5">
                    Wadah pengembangan akademik, teknologi, dan kolaborasi mahasiswa Sistem Informasi Universitas Indraprasta PGRI.
                </p>

                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3">Connect With Us</h4>
                    <div class="flex items-center gap-2.5">
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" title="Instagram" class="h-9 w-9 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:bg-slate-800 transition-all duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://tiktok.com" target="_blank" title="TikTok" class="h-9 w-9 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:bg-slate-800 transition-all duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://youtube.com" target="_blank" title="YouTube" class="h-9 w-9 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:bg-slate-800 transition-all duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Useful Website -->
            <div class="flex-1 min-w-[240px] max-w-[320px]">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3">Useful Website</h4>
                <ul class="space-y-2 text-xs text-slate-400 font-medium">
                    <li><a href="https://unindra.ac.id" target="_blank" class="hover:text-white transition-colors underline">Program Studi Sarjana Sistem Informasi Unindra</a></li>
                    <li><a href="https://bak.unindra.ac.id" target="_blank" class="hover:text-white transition-colors underline">Beranda | Biro Administrasi Akademik (BAK) (unindra.ac.id)</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Contact Us -->
            <div class="flex-1 min-w-[260px] max-w-[340px]">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-3">Contact Us</h4>
                <div class="flex flex-col gap-2 text-xs text-slate-400 font-medium leading-relaxed">
                    <p>
                        <strong class="text-slate-200">Phone / WhatsApp:</strong><br />
                        <a href="https://wa.me/6289638943275" target="_blank" class="text-slate-400 hover:text-white transition-colors">+62 8963-8943-275 (Zahra)</a>
                    </p>
                    <p>
                        <strong class="text-slate-200">Email:</strong><br />
                        <a href="mailto:unitassi@unindra.ac.id" class="text-slate-400 hover:text-white transition-colors">unitassi@unindra.ac.id</a>
                    </p>
                    <p><strong class="text-slate-200">Address:</strong><br />Jl. Nangka Raya No.58 C, RT.7/RW.5, Tj. Bar., Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12530</p>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="pt-8 text-center text-[11px] text-slate-500 font-medium">
            <p>&copy; 2025–2026 Unitas Sistem Informasi. All rights reserved.</p>
        </div>
    </div>
</footer>
@else
<!-- FOOTER LIGHT GLASSMORPHISM (TAILWIND CLEAN) -->
<footer class="w-full relative z-20 bg-white/80 backdrop-blur-xl text-slate-800 border-t border-white/40 pt-16 pb-8 px-6 mt-16 shadow-2xl">
    <div class="max-w-7xl mx-auto">
        
        <!-- Baris Utama Footer -->
        <div class="flex flex-wrap justify-between gap-12 pb-12 border-b border-slate-900/10">
            
            <!-- Kolom 1: Logo & Sosmed -->
            <div class="flex-1 min-w-[260px] max-w-[380px]">
                <div class="h-20 w-20 flex items-center justify-center mb-5">
                    <img src="{{ asset('images/logo-unitas.png') }}" alt="Logo Unitas SI" class="h-full w-full object-contain">
                </div>
                
                <p class="text-xs text-slate-700 font-semibold leading-relaxed mb-5 drop-shadow-sm">
                    Wadah pengembangan akademik, teknologi, dan kolaborasi mahasiswa Sistem Informasi Universitas Indraprasta PGRI.
                </p>

                <div>
                    <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-3 drop-shadow-sm">Connect With Us</h4>
                    <div class="flex items-center gap-2.5">
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" title="Instagram" class="h-9 w-9 rounded-full bg-white/70 border border-white/80 shadow-md flex items-center justify-center text-slate-700 hover:text-blue-600 hover:bg-white transition-all duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://tiktok.com" target="_blank" title="TikTok" class="h-9 w-9 rounded-full bg-white/70 border border-white/80 shadow-md flex items-center justify-center text-slate-700 hover:text-blue-600 hover:bg-white transition-all duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://youtube.com" target="_blank" title="YouTube" class="h-9 w-9 rounded-full bg-white/70 border border-white/80 shadow-md flex items-center justify-center text-slate-700 hover:text-blue-600 hover:bg-white transition-all duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Useful Website -->
            <div class="flex-1 min-w-[240px] max-w-[320px]">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-3 drop-shadow-sm">Useful Website</h4>
                <ul class="space-y-2 text-xs text-slate-700 font-semibold">
                    <li><a href="https://unindra.ac.id" target="_blank" class="hover:text-blue-600 transition-colors underline">Program Studi Sarjana Sistem Informasi Unindra</a></li>
                    <li><a href="https://bak.unindra.ac.id" target="_blank" class="hover:text-blue-600 transition-colors underline">Beranda | Biro Administrasi Akademik (BAK) (unindra.ac.id)</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Contact Us -->
            <div class="flex-1 min-w-[260px] max-w-[340px]">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-3 drop-shadow-sm">Contact Us</h4>
                <div class="flex flex-col gap-2 text-xs text-slate-700 font-semibold leading-relaxed">
                    <p>
                        <strong class="text-slate-900">Phone / WhatsApp:</strong><br />
                        <a href="https://wa.me/6289638943275" target="_blank" class="text-slate-700 hover:text-blue-600 transition-colors">+62 8963-8943-275 (Zahra)</a>
                    </p>
                    <p>
                        <strong class="text-slate-900">Email:</strong><br />
                        <a href="mailto:unitassi@unindra.ac.id" class="text-slate-700 hover:text-blue-600 transition-colors">unitassi@unindra.ac.id</a>
                    </p>
                    <p><strong class="text-slate-900">Address:</strong><br />Jl. Nangka Raya No.58 C, RT.7/RW.5, Tj. Bar., Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12530</p>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="pt-8 text-center text-[11px] text-slate-600 font-bold">
            <p>&copy; 2025–2026 Unitas Sistem Informasi. All rights reserved.</p>
        </div>
    </div>
</footer>
@endif