<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurasi Artikel - Admin Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white p-6 space-y-6">
            <h2 class="text-xl font-black text-blue-400">Admin Unitas SI</h2>
            <nav class="space-y-2 text-sm font-bold">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Dashboard</a>
                <a href="{{ route('admin.submissions') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Kurasi Artikel</a>
                <a href="/about/struktural" target="_blank" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Lihat Website &rarr;</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10 space-y-8">
            <h1 class="text-3xl font-black text-slate-900">Kurasi Artikel Mahasiswa</h1>

            @if(session('success'))
                <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
                <table class="w-full text-left text-xs">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase">
                        <tr>
                            <th class="p-4">Penulis / NPM</th>
                            <th class="p-4">Judul</th>
                            <th class="p-4">Status</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($submissions as $sub)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 font-bold">
                                    {{ $sub->author_name }}<br>
                                    <span class="text-slate-400 font-normal">{{ $sub->author_npm }}</span>
                                </td>
                                <td class="p-4 font-bold text-slate-800">{{ $sub->title }}</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase
                                        {{ $sub->status === 'approved' ? 'bg-emerald-100 text-emerald-700' : ($sub->status === 'rejected' ? 'bg-rose-100 text-rose-700' : 'bg-amber-100 text-amber-700') }}">
                                        {{ $sub->status }}
                                    </span>
                                </td>
                                <td class="p-4 text-right space-x-2">
                                    @if($sub->status === 'pending')
                                        <form action="{{ route('admin.submissions.approve', $sub->id) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-lg text-xs">Approve</button>
                                        </form>
                                        <form action="{{ route('admin.submissions.reject', $sub->id) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="px-3 py-1.5 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs">Tolak</button>
                                        </form>
                                    @else
                                        <span class="text-slate-400 font-medium">Selesai</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-8 text-center text-slate-400 font-medium">Belum ada kiriman artikel.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>