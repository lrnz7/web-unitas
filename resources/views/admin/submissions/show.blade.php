<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Draf Artikel - Admin Unitas SI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 font-sans p-6 md:p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
        
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <div>
                <span class="text-[10px] font-black uppercase tracking-widest text-blue-600 bg-blue-50 px-3 py-1 rounded-full border border-blue-100">
                    Detail Review Artikel
                </span>
                <h1 class="text-2xl font-black text-slate-900 mt-2">{{ $submission->title }}</h1>
                <p class="text-xs text-slate-500 font-medium mt-1">
                    Penulis: <strong class="text-slate-800">{{ $submission->author_name }}</strong> | NPM: <strong class="text-slate-800">{{ $submission->author_npm }}</strong>
                </p>
            </div>
            <a href="{{ route('admin.submissions') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Kembali ke Daftar</a>
        </div>

        @if($submission->excerpt)
            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                <span class="text-[10px] font-bold text-slate-400 uppercase block mb-1">Excerpt / Ringkasan:</span>
                <p class="text-xs font-semibold text-slate-700 italic">"{{ $submission->excerpt }}"</p>
            </div>
        @endif

        <div class="space-y-2">
            <span class="text-[10px] font-bold text-slate-400 uppercase block">Isi Konten Artikel:</span>
            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 text-xs text-slate-700 leading-relaxed whitespace-pre-line font-medium">
                {{ $submission->content }}
            </div>
        </div>

        <!-- Lampiran 3 Slot Gambar -->
        <div class="space-y-2 border-t border-slate-100 pt-4">
            <span class="text-[10px] font-bold text-slate-400 uppercase block">Lampiran Gambar Uploaded:</span>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <span class="text-[10px] font-bold text-slate-500 block mb-1">Foto Utama (Header):</span>
                    @if($submission->photo_primary)
                        <img src="{{ asset('storage/' . $submission->photo_primary) }}" class="rounded-xl border border-slate-200 object-cover h-40 w-full">
                    @else
                        <div class="h-40 bg-slate-100 rounded-xl border border-dashed flex items-center justify-center text-xs text-slate-400 font-bold">Gak ada foto</div>
                    @endif
                </div>

                <div>
                    <span class="text-[10px] font-bold text-slate-500 block mb-1">Foto Tengah:</span>
                    @if($submission->photo_secondary)
                        <img src="{{ asset('storage/' . $submission->photo_secondary) }}" class="rounded-xl border border-slate-200 object-cover h-40 w-full">
                    @else
                        <div class="h-40 bg-slate-100 rounded-xl border border-dashed flex items-center justify-center text-xs text-slate-400 font-bold">Gak ada foto</div>
                    @endif
                </div>

                <div>
                    <span class="text-[10px] font-bold text-slate-500 block mb-1">Foto Tambahan:</span>
                    @if($submission->photo_extra)
                        <img src="{{ asset('storage/' . $submission->photo_extra) }}" class="rounded-xl border border-slate-200 object-cover h-40 w-full">
                    @else
                        <div class="h-40 bg-slate-100 rounded-xl border border-dashed flex items-center justify-center text-xs text-slate-400 font-bold">Gak ada foto</div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-between items-center border-t border-slate-100 pt-6">
            <span class="text-xs font-bold text-slate-400">
                Status Draf: <strong class="uppercase text-amber-600">{{ $submission->status }}</strong>
            </span>
            
            <div class="flex gap-3">
                @if($submission->status === 'pending')
                    <form action="{{ route('admin.submissions.reject', $submission->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="px-5 py-2.5 bg-rose-600 text-white font-bold rounded-xl text-xs hover:bg-rose-700 transition-all">
                            Tolak Artikel
                        </button>
                    </form>
                    <form action="{{ route('admin.submissions.approve', $submission->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="px-5 py-2.5 bg-emerald-600 text-white font-bold rounded-xl text-xs hover:bg-emerald-700 transition-all shadow-md">
                            Approve & Terbitkan ke Blog &rarr;
                        </button>
                    </form>
                @else
                    <span class="text-xs font-bold text-slate-400">Keputusan Sudah Diproses</span>
                @endif
            </div>
        </div>

    </div>
</body>
</html>