<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Artikel - Admin Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans p-8">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
        <div class="flex justify-between items-center border-b pb-4">
            <div>
                <span class="text-xs font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-full uppercase">Review Request Blog</span>
                <h1 class="text-2xl font-black text-slate-900 mt-2">{{ $submission->title }}</h1>
                <p class="text-xs text-slate-500 font-medium mt-1">Oleh: {{ $submission->author_name }} (NPM: {{ $submission->author_npm }})</p>
            </div>
            <a href="{{ route('admin.submissions') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Kembali</a>
        </div>

        <div class="prose max-w-none text-slate-700 text-sm leading-relaxed whitespace-pre-line">
            {{ $submission->content }}
        </div>

        <!-- Lampiran Gambar -->
        <div class="grid grid-cols-3 gap-4 border-t pt-4">
            @if($submission->photo_primary)
                <div>
                    <span class="text-[10px] font-bold text-slate-400 block mb-1">Foto Utama:</span>
                    <img src="{{ asset('storage/' . $submission->photo_primary) }}" class="rounded-xl border object-cover h-32 w-full">
                </div>
            @endif
            @if($submission->photo_secondary)
                <div>
                    <span class="text-[10px] font-bold text-slate-400 block mb-1">Foto Tengah:</span>
                    <img src="{{ asset('storage/' . $submission->photo_secondary) }}" class="rounded-xl border object-cover h-32 w-full">
                </div>
            @endif
            @if($submission->photo_extra)
                <div>
                    <span class="text-[10px] font-bold text-slate-400 block mb-1">Foto Tambahan:</span>
                    <img src="{{ asset('storage/' . $submission->photo_extra) }}" class="rounded-xl border object-cover h-32 w-full">
                </div>
            @endif
        </div>

        <!-- Tombol Eksekusi -->
        <div class="flex justify-end gap-3 border-t pt-6">
            <form action="{{ route('admin.submissions.reject', $submission->id) }}" method="POST">
                @csrf
                <button type="submit" class="px-5 py-2.5 bg-rose-600 text-white font-bold rounded-xl text-xs hover:bg-rose-700">Tolak Artikel</button>
            </form>
            <form action="{{ route('admin.submissions.approve', $submission->id) }}" method="POST">
                @csrf
                <button type="submit" class="px-5 py-2.5 bg-emerald-600 text-white font-bold rounded-xl text-xs hover:bg-emerald-700">Approve & Terbitkan &rarr;</button>
            </form>
        </div>
    </div>
</body>
</html>