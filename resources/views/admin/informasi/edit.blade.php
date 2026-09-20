<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Informasi - Admin Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans p-10">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-xl font-black text-slate-900">Edit Data Informasi</h1>
            <a href="{{ route('admin.informasi') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Batal</a>
        </div>

        @if(isset($errors) && $errors->any())
            <div class="p-4 bg-rose-100 border border-rose-300 text-rose-800 text-xs font-bold rounded-xl space-y-1">
                @foreach ($errors->all() as $error)
                    <p>&bull; {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.informasi.update', $info->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Judul Informasi *</label>
                    <input type="text" name="title" value="{{ $info->title }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                </div>

                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Kategori *</label>
                    <select name="category" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
                        @foreach(['Panduan KRS & Praktikum', 'Biaya & Syarat Ujian', 'Ensiklopedi Sisfor'] as $cat)
                            <option value="{{ $cat }}" {{ $info->category == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Ringkasan Singkat (Excerpt) *</label>
                <input type="text" name="excerpt" value="{{ $info->excerpt }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Deskripsi Lengkap (Content) (Opsional)</label>
                <textarea name="content" rows="5" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-4 text-xs font-medium">{{ $info->content }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Ganti Lampiran Gambar (Kosongkan jika tidak diubah)</label>
                    <input type="file" name="image_path" accept="image/*" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-2 text-xs font-medium">
                    @if($info->image_path)
                        <p class="text-[11px] text-slate-500 mt-1">
                            File saat ini: <a href="{{ asset('storage/' . $info->image_path) }}" target="_blank" class="text-blue-600 underline font-bold">Lihat Lampiran</a>
                        </p>
                    @endif
                </div>

                <div class="pt-4 flex items-center space-x-3">
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $info->is_active ? 'checked' : '' }} class="w-4 h-4 text-blue-600 rounded border-slate-300 focus:ring-blue-500">
                    <label for="is_active" class="text-xs font-bold text-slate-700 cursor-pointer">
                        Tampilkan di Homepage (Status Aktif)
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs transition-all cursor-pointer">
                Simpan Perubahan Informasi &rarr;
            </button>
        </form>
    </div>
</body>
</html>