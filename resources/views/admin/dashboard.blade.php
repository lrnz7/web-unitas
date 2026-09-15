<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white p-6 space-y-6">
            <h2 class="text-xl font-black text-blue-400">Admin Unitas SI</h2>
            <nav class="space-y-2 text-sm font-bold">
    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Dashboard</a>
    <a href="{{ route('admin.submissions') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kurasi Artikel</a>
    <a href="{{ route('admin.articles') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Artikel Admin</a>
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
            <h1 class="text-3xl font-black text-slate-900">Dashboard Overview</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                    <span class="text-xs font-bold text-slate-400 uppercase">Artikel Pending</span>
                    <p class="text-4xl font-black text-amber-500">{{ $pendingCount }}</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                    <span class="text-xs font-bold text-slate-400 uppercase">Artikel Disetujui</span>
                    <p class="text-4xl font-black text-emerald-500">{{ $approvedCount }}</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-2">
                    <span class="text-xs font-bold text-slate-400 uppercase">Total Pengurus</span>
                    <p class="text-4xl font-black text-blue-600">{{ $membersCount }}</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>