<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Modul Perkuliahan - Admin Unitas SI</title>
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
                <a href="{{ route('admin.informasi') }}" class="block px-4 py-2.5 rounded-xl text-slate-400 hover:bg-slate-800 hover:text-white">Kelola Informasi</a>
                <a href="{{ route('admin.modul') }}" class="block px-4 py-2.5 rounded-xl bg-blue-600 text-white">Modul Perkuliahan</a>
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
            <div>
                <h1 class="text-3xl font-black text-slate-900">Kelola Modul Perkuliahan</h1>
                <p class="text-sm text-slate-500 mt-1">Upload file <span class="font-bold text-slate-700">.zip</span> modul materi perkuliahan untuk setiap semester. File akan tersedia sebagai tombol download di halaman Informasi Akademis.</p>
            </div>
            @if(session('success'))
                <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                    ✓ {{ session('success') }}
                </div>
            @endif
            @if(isset($errors) && $errors->any())
                <div class="p-4 bg-rose-100 border border-rose-300 text-rose-800 text-xs font-bold rounded-xl space-y-1">
                    @foreach ($errors->all() as $error)
                        <p>&bull; {{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="p-4 bg-blue-50 border border-blue-200 rounded-2xl flex items-start gap-3">
                <div class="w-8 h-8 shrink-0 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm font-black">i</div>
                <div class="text-xs text-blue-900 space-y-1">
                    <p class="font-bold">Panduan Upload Modul:</p>
                    <ul class="list-disc list-inside space-y-0.5 font-medium">
                        <li>Format file yang diterima: <span class="font-black">.zip</span></li>
                        <li>Ukuran maksimal per file: <span class="font-black">200 MB</span></li>
                        <li>Upload ulang akan otomatis menggantikan file semester yang sama</li>
                        <li>Tombol download akan aktif di halaman Informasi Akademis setelah upload</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach($curriculum as $sem)
                    @php
                        $hasModule = !empty($sem['module_path']);
                        $downloadUrl = $hasModule ? asset('storage/' . $sem['module_path']) : null;
                    @endphp
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden flex flex-col">
                        <div class="px-5 py-4 flex items-center justify-between border-b border-slate-100 bg-slate-50">
                            <h3 class="text-base font-black text-slate-900">Semester {{ $sem['semester'] }}</h3>
                            @if($hasModule)
                                <span class="px-2.5 py-1 bg-emerald-100 text-emerald-700 rounded-lg text-[10px] font-extrabold uppercase">✓ Tersedia</span>
                            @else
                                <span class="px-2.5 py-1 bg-slate-200 text-slate-500 rounded-lg text-[10px] font-extrabold uppercase">Belum ada</span>
                            @endif
                        </div>
                        <div class="p-5 flex-1 space-y-4">
                            @if($hasModule)
                                <div class="p-3 bg-emerald-50 rounded-xl border border-emerald-100 space-y-2">
                                    <p class="text-[11px] text-emerald-700 font-bold">File aktif:</p>
                                    <a href="{{ $downloadUrl }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700 hover:text-emerald-900 underline break-all">
                                        semester-{{ $sem['semester'] }}-modul.zip
                                    </a>
                                </div>
                            @endif
                            <form action="{{ route('admin.modul.upload', $sem['semester']) }}" method="POST" enctype="multipart/form-data" class="space-y-3">
                                @csrf
                                <label class="text-xs font-bold text-slate-700">{{ $hasModule ? 'Ganti File Modul' : 'Upload File Modul' }} (.zip)</label>
                                <input type="file" name="module_file" accept=".zip" required
                                       class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium text-slate-700 file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-blue-600 file:text-white hover:file:bg-blue-700 cursor-pointer">
                                <button type="submit" class="w-full py-2.5 {{ $hasModule ? 'bg-amber-500 hover:bg-amber-600' : 'bg-blue-600 hover:bg-blue-700' }} text-white font-bold rounded-xl text-xs transition-all cursor-pointer">
                                    {{ $hasModule ? '↑ Ganti Modul' : '↑ Upload Modul' }}
                                </button>
                            </form>
                        </div>
                        @if($hasModule)
                            <div class="px-5 pb-4">
                                <form action="{{ route('admin.modul.delete', $sem['semester']) }}" method="POST"
                                      onsubmit="return confirm('Hapus modul Semester {{ $sem['semester'] }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full py-2 bg-rose-50 hover:bg-rose-100 text-rose-600 hover:text-rose-700 font-bold rounded-xl text-xs transition-all cursor-pointer border border-rose-200">
                                        Hapus Modul
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>