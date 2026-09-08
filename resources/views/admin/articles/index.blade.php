<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Artikel - Admin Unitas SI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 font-sans">
    <div class="flex min-h-screen">
        
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-slate-900 text-white p-6 space-y-6">
            <h2 class="text-xl font-black text-blue-400">Admin Unitas SI</h2>
            <nav class="space-y-2 text-sm font-bold">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Dashboard</a>
                <a href="{{ route('admin.submissions') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kurasi Artikel</a>
                <a href="{{ route('admin.articles') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Artikel Admin</a>
                <a href="{{ route('admin.events') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kelola Event</a>
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
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-black text-slate-900">Artikel Mandiri Admin</h1>
                <a href="{{ route('admin.articles.create') }}" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs">+ Buat Artikel Baru</a>
            </div>

            @if(session('success'))
                <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase">
                        <tr>
                            <th class="p-4">Judul Artikel</th>
                            <th class="p-4">Penulis</th>
                            <th class="p-4">Tanggal Terbit</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($articles as $a)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 font-bold text-slate-900">{{ $a->title }}</td>
                                <td class="p-4 font-semibold text-slate-600">{{ $a->author_name }}</td>
                                <td class="p-4 text-slate-400">{{ $a->created_at->format('d M Y') }}</td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="/blog/{{ $a->slug }}" target="_blank" class="px-3 py-1.5 bg-slate-800 hover:bg-slate-900 text-white font-bold rounded-lg text-xs">Lihat &rarr;</a>
                                    <a href="{{ route('admin.articles.edit', $a->id) }}" class="px-3 py-1.5 bg-amber-500 hover:bg-amber-600 text-white font-bold rounded-lg text-xs">Edit</a>
                                    <form action="{{ route('admin.articles.destroy', $a->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus artikel ini secara permanen?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-8 text-center text-slate-400 font-medium">Belum ada artikel resmi buatan admin.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</body>
</html>