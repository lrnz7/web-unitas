<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengurus - Admin Unitas SI</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800 font-sans p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-xl font-black text-slate-900">Edit Data Pengurus</h1>
            <a href="{{ route('admin.members') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">&larr; Batal</a>
        </div>

        <form action="{{ route('admin.members.update', $member->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Nama Lengkap</label>
                <input type="text" name="name" value="{{ $member->name }}" required class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Jabatan / Role</label>
                <input type="text" name="role" value="{{ $member->role }}" required class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Periode</label>
                    <select name="period_id" class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
                        @foreach($periods as $p)
                            <option value="{{ $p->id }}" {{ $member->period_id == $p->id ? 'selected' : '' }}>{{ $p->label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-1">
                    <label class="text-xs font-bold text-slate-700">Divisi</label>
                    <select name="division_id" class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
                        @foreach($divisions as $d)
                            <option value="{{ $d->id }}" {{ $member->division_id == $d->id ? 'selected' : '' }}>{{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Ganti Foto Formal (Kosongkan jika tidak diubah)</label>
                <input type="file" name="photo_primary" accept="image/*" class="w-full bg-slate-50 border rounded-xl p-2 text-xs">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Ganti Foto Pose (Kosongkan jika tidak diubah)</label>
                <input type="file" name="photo_secondary" accept="image/*" class="w-full bg-slate-50 border rounded-xl p-2 text-xs">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Tupoksi (Pisahkan koma)</label>
                <input type="text" name="tupoksi" value="{{ implode(', ', $member->tupoksi ?? []) }}" class="w-full bg-slate-50 border rounded-xl px-4 py-2.5 text-xs font-bold">
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs">
                Simpan Perubahan
            </button>
        </form>
    </div>
</body>
</html>