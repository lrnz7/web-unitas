<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengurus - Admin Unitas SI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 font-sans">
    <div class="flex min-h-screen">
        
        <aside class="w-64 bg-slate-900 text-white p-6 space-y-6">
            <h2 class="text-xl font-black text-blue-400">Admin Unitas SI</h2>
            <nav class="space-y-2 text-sm font-bold">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Dashboard</a>
                <a href="{{ route('admin.submissions') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kurasi Artikel</a>
                <a href="{{ route('admin.articles') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Artikel Admin</a>
                <a href="{{ route('admin.events') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kelola Event</a>
                <a href="{{ route('admin.members') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Kelola Pengurus</a>
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
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <h1 class="text-3xl font-black text-slate-900">Kelola Struktural Kepengurusan</h1>

                <!-- Filter Tab Periode -->
                <form action="{{ route('admin.members') }}" method="GET" class="flex items-center gap-2 bg-white p-2 rounded-2xl border border-slate-200 shadow-xs">
                    <span class="text-xs font-extrabold text-slate-400 uppercase px-2">Filter Periode:</span>
                    <select name="period_id" onchange="this.form.submit()" class="bg-slate-50 border border-slate-200 text-xs font-bold text-blue-600 rounded-xl px-3 py-1.5 focus:outline-none cursor-pointer">
                        @foreach($periods as $p)
                            <option value="{{ $p->id }}" {{ $selectedPeriodId == $p->id ? 'selected' : '' }}>
                                {{ $p->label }} {{ $p->is_active ? '(Aktif)' : '' }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>

            @if(session('success'))
                <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Tambah Pengurus Baru -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-4">
                <h2 class="text-base font-extrabold text-slate-800">Tambah Pengurus Baru</h2>
                
                <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Nama Lengkap *</label>
                            <input type="text" name="name" required placeholder="Contoh: Lorenzo Calvin" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Jabatan / Role *</label>
                            <input type="text" name="role" required placeholder="Contoh: Anggota PSDM" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Periode *</label>
                            <select name="period_id" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                                @foreach($periods as $p)
                                    <option value="{{ $p->id }}" {{ $selectedPeriodId == $p->id ? 'selected' : '' }}>{{ $p->label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Divisi *</label>
                            <select name="division_id" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                                @foreach($divisions as $d)
                                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Foto Utama (Normal) *</label>
                            <input type="file" name="photo_primary" required accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-700">Foto Pose (Hover Opsional)</label>
                            <input type="file" name="photo_secondary" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium">
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-700">Tupoksi (Pisahkan dengan koma)</label>
                        <input type="text" name="tupoksi" placeholder="Contoh: Mengelola event, Melakukan rekrutmen" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                    </div>

                    <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs transition-all">
                        + Simpan Pengurus
                    </button>
                </form>
            </div>

            <!-- Tabel Daftar Pengurus -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
                <div class="p-4 bg-slate-50 border-b border-slate-200 font-extrabold text-xs text-slate-600">
                    Menampilkan Pengurus: <span class="text-blue-600">{{ $periods->firstWhere('id', $selectedPeriodId)?->label }}</span> (Total: {{ $members->count() }} orang)
                </div>
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase">
                        <tr>
                            <th class="p-4">Foto Formal</th>
                            <th class="p-4">Nama</th>
                            <th class="p-4">Jabatan / Divisi</th>
                            <th class="p-4">Periode</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($members as $m)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4">
                                    <img src="{{ \Illuminate\Support\Str::startsWith($m->photo_primary, 'images/') ? asset($m->photo_primary) : asset('storage/' . $m->photo_primary) }}" 
                                         class="w-10 h-10 rounded-full object-cover border border-slate-200 shadow-xs"
                                         onerror="this.src='https://placehold.co/100x100/334EAC/FFF?text=Foto'">
                                </td>
                                <td class="p-4 font-bold text-slate-900">{{ $m->name }}</td>
                                <td class="p-4">
                                    <span class="font-bold text-slate-800">{{ $m->role }}</span><br>
                                    <span class="text-slate-400">{{ $m->division?->name }}</span>
                                </td>
                                <td class="p-4 font-semibold text-slate-600">{{ $m->period?->label }}</td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="{{ route('admin.members.edit', $m->id) }}" class="px-3 py-1.5 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-lg text-xs">Edit</a>
                                    <form action="{{ route('admin.members.destroy', $m->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus pengurus ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-8 text-center text-slate-400 font-medium">Belum ada pengurus di periode ini.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</body>
</html>