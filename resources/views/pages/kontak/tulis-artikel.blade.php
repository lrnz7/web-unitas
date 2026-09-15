<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kirim Karya Artikel - Unitas Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style> body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; } </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-4xl mx-auto w-full space-y-8">
        
        <div class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-8">
            
            <div class="text-center space-y-3 border-b border-slate-100 pb-6">
                <span class="text-[11px] font-black uppercase tracking-widest text-[#334EAC] bg-blue-50 px-4 py-1.5 rounded-full border border-blue-100">
                    Publikasi Artikel Mahasiswa
                </span>
                <h1 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">
                    Tulis & Kirim Artikelmu
                </h1>
                <p class="text-slate-500 text-xs md:text-sm max-w-lg mx-auto font-medium leading-relaxed">
                    Punya opini, tutorial coding, atau tulisan menarik? Kirim draf tulisanmu. Artikel yang disetujui admin akan diterbitkan resmi di Blog Unitas SI!
                </p>
            </div>

            <!-- Flash Alert Sukses -->
            @if(session('success'))
                <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl text-center">
                    🎉 {{ session('success') }}
                </div>
            @endif

            <!-- Flash Alert Error Global -->
            @if($errors->any())
                <div class="p-4 bg-rose-50 border border-rose-200 text-rose-700 text-xs font-bold rounded-2xl space-y-1">
                    <p class="font-extrabold">Gagal Mengirim Artikel:</p>
                    <ul class="list-disc list-inside font-medium">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700">Nama Penulis *</label>
                        <input type="text" name="author_name" value="{{ old('author_name') }}" required placeholder="Nama lengkap kamu" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700">NPM SI Unindra *</label>
                        <input type="text" name="author_npm" value="{{ old('author_npm') }}" required placeholder="Contoh: 202433500123" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700">Judul Artikel *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required placeholder="Contoh: Mengembangkan Sistem Informasi Modern" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700">Ringkasan Singkat (Excerpt)</label>
                    <input type="text" name="excerpt" value="{{ old('excerpt') }}" placeholder="Ringkasan 1-2 kalimat untuk preview card..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700">Isi Artikel / Draf Tulisan *</label>
                    <textarea name="content" rows="10" required placeholder="Tuliskan artikel lengkapmu di sini..." class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">{{ old('content') }}</textarea>
                </div>

                <!-- 3 Slot Upload Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-t border-slate-100 pt-6">
                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700">Foto Utama (Header) *</label>
                        <input type="file" name="photo_primary" required accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium text-slate-700 focus:outline-none">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700">Foto Tengah (Opsional)</label>
                        <input type="file" name="photo_secondary" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium text-slate-700 focus:outline-none">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700">Foto Tambahan (Opsional)</label>
                        <input type="file" name="photo_extra" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium text-slate-700 focus:outline-none">
                    </div>
                </div>

                <button type="submit" class="w-full py-3.5 rounded-full bg-[#334EAC] hover:bg-blue-800 text-white font-extrabold text-sm transition-all shadow-md">
                    Kirim Draf Artikel untuk Peninjauan &rarr;
                </button>
            </form>

        </div>

    </main>

    <x-footer />

</body>
</html>