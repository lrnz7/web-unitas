<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Event - Admin Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans">
    <div class="flex min-h-screen">
        
        <aside class="w-64 bg-slate-900 text-white p-6 space-y-6">
            <h2 class="text-xl font-black text-blue-400">Admin Unitas SI</h2>
            <nav class="space-y-2 text-sm font-bold">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Dashboard</a>
                <a href="{{ route('admin.submissions') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kurasi Artikel</a>
                <a href="{{ route('admin.articles') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Artikel Admin</a>
                <a href="{{ route('admin.events') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Kelola Event</a>
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

        <main class="flex-1 p-10 space-y-8">
            <h1 class="text-3xl font-black text-slate-900">Kelola Event & Kegiatan Unitas SI</h1>

            @if(session('success'))
                <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Tambah Event -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-4">
                <h2 class="text-base font-extrabold text-slate-800">Tambah Event Baru</h2>
                
                <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Nama Event *</label>
                            <input type="text" name="title" required placeholder="Contoh: AIMPACT 2026" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Kategori *</label>
                            <select name="category" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                                <option value="Seminar">Seminar</option>
                                <option value="Keakraban">Keakraban</option>
                                <option value="Organisasi">Organisasi</option>
                                <option value="Kaderisasi">Kaderisasi</option>
                                <option value="Pengabdian">Pengabdian</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Tanggal * (Format YYYY-MM-DD)</label>
                            <input type="date" name="date" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Tampilan Tgl * (Misal: 28 Juni 2026)</label>
                            <input type="text" name="date_label" required placeholder="28 Juni 2026" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700">Ringkasan Singkat (Excerpt) *</label>
                        <input type="text" name="excerpt" required placeholder="Seminar nasional seputar AI..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700">Deskripsi Lengkap *</label>
                        <textarea name="description" rows="4" required class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-medium"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Gambar Cover (Opsional)</label>
                            <input type="file" name="cover_image" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Google Drive Folder ID (Opsional Dokumentasi)</label>
                            <input type="text" name="drive_folder_id" placeholder="Contoh: 1E-MOE7boT9KvWdmPRkc..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>
                    </div>

                    <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs transition-all">
                        + Simpan Event
                    </button>
                </form>
            </div>

            <!-- Tabel Daftar Event -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase">
                        <tr>
                            <th class="p-4">Nama Event</th>
                            <th class="p-4">Kategori</th>
                            <th class="p-4">Tanggal</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($events as $e)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 font-bold text-slate-900">{{ $e['title'] }}</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 bg-blue-100 text-blue-700 rounded-lg text-[10px] font-extrabold uppercase">{{ $e['category'] }}</span>
                                </td>
                                <td class="p-4 font-semibold text-slate-600">{{ $e['date_label'] }}</td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="/events/{{ $e['slug'] }}" target="_blank" class="px-3 py-1.5 bg-slate-800 hover:bg-slate-900 text-white font-bold rounded-lg text-xs">Lihat &rarr;</a>
                                    <a href="{{ route('admin.events.edit', $e['id']) }}" class="px-3 py-1.5 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-lg text-xs">Edit</a>
                                    <form action="{{ route('admin.events.destroy', $e['id']) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus event ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-8 text-center text-slate-400 font-medium">Belum ada event.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</body>
</html>