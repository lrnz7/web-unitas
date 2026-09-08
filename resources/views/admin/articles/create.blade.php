<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Artikel Baru - Admin Unitas SI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 font-sans p-10">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-xl font-black text-slate-900">Posting Artikel Resmi Baru</h1>
            <a href="{{ route('admin.articles') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Batal</a>
        </div>

        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Judul Artikel *</label>
                <input type="text" name="title" required class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Nama Penulis / Redaksi *</label>
                <input type="text" name="author_name" value="Admin Unitas SI" required class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Isi Konten *</label>
                <textarea name="content" rows="8" required class="w-full bg-slate-50 border rounded-xl p-4 text-xs font-medium"></textarea>
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Foto Utama (Header) *</label>
                <input type="file" name="photo_primary" required accept="image/*" class="w-full bg-slate-50 border rounded-xl p-2 text-xs">
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs">
                Terbitkan Artikel Resmi &rarr;
            </button>
        </form>
    </div>
</body>
</html>