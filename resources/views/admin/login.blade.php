<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Unitas SI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-slate-800 font-sans min-h-screen flex items-center justify-center p-6">
    <div class="max-w-md w-full bg-white rounded-3xl p-8 shadow-2xl border border-slate-200 space-y-6">
        
        <div class="text-center space-y-2">
            <h1 class="text-2xl font-black text-slate-900">Admin Unitas SI</h1>
            <p class="text-xs font-semibold text-slate-500">Masuk untuk mengelola seluruh konten website</p>
        </div>

        @if(session('success'))
            <div class="p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-bold rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="p-4 bg-rose-100 border border-rose-300 text-rose-800 text-xs font-bold rounded-xl">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
            @csrf

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Email Admin</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="admin@unitas-si.org" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold focus:outline-none focus:border-blue-600">
            </div>

            <div class="space-y-1">
                <label class="text-xs font-bold text-slate-700">Password</label>
                <input type="password" name="password" required placeholder="••••••••" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-bold focus:outline-none focus:border-blue-600">
            </div>

            <button type="submit" class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-extrabold rounded-xl text-xs transition-all shadow-lg shadow-blue-500/20">
                Masuk ke Admin Panel &rarr;
            </button>
        </form>

        <div class="text-center">
            <a href="/" class="text-xs font-bold text-slate-400 hover:text-slate-600">&larr; Kembali ke Website Publik</a>
        </div>
    </div>
</body>
</html>