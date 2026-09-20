<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Informasi - Admin Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans">
    <div class="flex min-h-screen">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white p-6 space-y-6">
            <h2 class="text-xl font-black text-blue-400">Admin Unitas SI</h2>
            <nav class="space-y-2 text-sm font-bold">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Dashboard</a>
                <a href="{{ route('admin.submissions') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kurasi Artikel</a>
                <a href="{{ route('admin.articles') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Artikel Admin</a>
                <a href="{{ route('admin.events') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kelola Event</a>
                <a href="{{ route('admin.informasi') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Kelola Informasi</a>
                <a href="{{ route('admin.modul') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Modul Perkuliahan</a>
                <a href="{{ route('admin.members') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kelola Pengurus</a>
                <a href="/" target="_blank" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Lihat Website &rarr;</a>
                <form action="{{ route('logout') }}" method="POST" class="pt-4 border-t border-slate-800">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2.5 rounded-xl text-rose-400 hover:bg-rose-950/50 hover:text-rose-300 font-bold transition-all cursor-pointer">
                        &larr; Keluar (Logout)
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10 space-y-8">
            <h1 class="text-3xl font-black text-slate-900">Kelola Information Corner</h1>

            @if(session('success'))
                <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            @if(isset($errors) && $errors->any())
                <div class="p-4 bg-rose-100 border border-rose-300 text-rose-800 text-xs font-bold rounded-xl space-y-1">
                    @foreach ($errors->all() as $error)
                        <p>&bull; {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Form Tambah Informasi -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-4">
                <h2 class="text-base font-extrabold text-slate-800">Tambah Informasi Baru</h2>
                
                <form action="{{ route('admin.informasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Judul Informasi *</label>
                            <input type="text" name="title" required placeholder="Contoh: Jadwal Praktikum Lab Pemrograman Web" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Kategori *</label>
                            <select name="category" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                                <option value="Panduan KRS & Praktikum">Panduan KRS & Praktikum</option>
                                <option value="Biaya & Syarat Ujian">Biaya & Syarat Ujian</option>
                                <option value="Ensiklopedi Sisfor">Ensiklopedi Sisfor</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700">Ringkasan Singkat (Excerpt) *</label>
                        <input type="text" name="excerpt" required placeholder="Ringkasan singkat untuk kartu preview..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700">Deskripsi Lengkap (Content) (Opsional)</label>
                        <textarea name="content" rows="4" placeholder="Penjelasan detail informasi, instruksi lab, atau panduan..." class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-medium"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Lampiran Gambar (Opsional)</label>
                            <input type="file" name="image_path" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium">
                        </div>

                        <div class="pt-4 flex items-center space-x-3">
                            <input type="checkbox" id="is_active" name="is_active" value="1" checked class="w-4 h-4 text-blue-600 rounded border-slate-300 focus:ring-blue-500">
                            <label for="is_active" class="text-xs font-bold text-slate-700 cursor-pointer">
                                Tampilkan di Homepage (Status Aktif)
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs transition-all cursor-pointer">
                        + Simpan Informasi
                    </button>
                </form>
            </div>

            <!-- Tabel Daftar Informasi -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase">
                        <tr>
                            <th class="p-4">Informasi</th>
                            <th class="p-4">Kategori</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Lampiran</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($informasi as $info)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4">
                                    <div class="font-bold text-slate-900">{{ $info->title }}</div>
                                    <div class="text-[11px] text-slate-500 truncate max-w-md mt-0.5">{{ $info->excerpt }}</div>
                                </td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 bg-blue-100 text-blue-700 rounded-lg text-[10px] font-extrabold uppercase whitespace-nowrap">
                                        {{ $info->category }}
                                    </span>
                                </td>
                                <td class="p-4">
                                    @if($info->is_active)
                                        <span class="px-2.5 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-[10px] font-extrabold uppercase">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="px-2.5 py-1 bg-slate-200 text-slate-600 rounded-lg text-[10px] font-extrabold uppercase">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>
                                <td class="p-4">
                                    @if($info->image_path)
                                        <a href="{{ asset('storage/' . $info->image_path) }}" target="_blank" class="inline-flex items-center gap-1.5 text-blue-600 hover:text-blue-800 font-bold">
                                            <img src="{{ asset('storage/' . $info->image_path) }}" alt="" class="w-8 h-8 rounded-lg object-cover border border-slate-200">
                                            <span>Lihat File</span>
                                        </a>
                                    @else
                                        <span class="text-slate-400 italic text-[11px]">-</span>
                                    @endif
                                </td>
                                <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                    <a href="{{ route('admin.informasi.edit', $info->id) }}" class="px-3 py-1.5 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-lg text-xs">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.informasi.destroy', $info->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus informasi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs cursor-pointer">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-8 text-center text-slate-400 font-medium">Belum ada data informasi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</body>
</html>