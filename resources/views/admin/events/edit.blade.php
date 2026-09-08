<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event - Admin Unitas SI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 font-sans p-10">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-xl font-black text-slate-900">Edit Data Event</h1>
            <a href="{{ route('admin.events') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Batal</a>
        </div>

        <form action="{{ route('admin.events.update', $event['id']) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Nama Event *</label>
                    <input type="text" name="title" value="{{ $event['title'] }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                </div>

                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Kategori *</label>
                    <select name="category" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        @foreach(['Seminar', 'Keakraban', 'Organisasi', 'Kaderisasi', 'Pengabdian'] as $cat)
                            <option value="{{ $cat }}" {{ $event['category'] == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Tanggal *</label>
                    <input type="date" name="date" value="{{ $event['date'] }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                </div>

                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Tampilan Tgl * (Misal: 28 Juni 2026)</label>
                    <input type="text" name="date_label" value="{{ $event['date_label'] }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                </div>
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Ringkasan Singkat (Excerpt) *</label>
                <input type="text" name="excerpt" value="{{ $event['excerpt'] }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Deskripsi Lengkap *</label>
                <textarea name="description" rows="5" required class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-medium">{{ $event['description'] }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Ganti Cover Image (Kosongkan jika tidak diubah)</label>
                    <input type="file" name="cover_image" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium">
                </div>

                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Google Drive Folder ID (Dokumentasi)</label>
                    <input type="text" name="drive_folder_id" value="{{ $event['drive_folder_id'] ?? '' }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs transition-all">
                Simpan Perubahan Event &rarr;
            </button>
        </form>
    </div>
</body>
</html>