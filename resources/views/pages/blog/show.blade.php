<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post['title'] }} - Unitas Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; } </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-4xl mx-auto w-full space-y-10">
        
        <!-- Tombol Kembali -->
        <div>
            <a href="{{ url('/blog') }}" class="inline-flex items-center gap-2 text-xs font-extrabold text-slate-500 hover:text-[#334EAC] transition-colors">
                &larr; Kembali ke Daftar Blog
            </a>
        </div>

        <!-- Detail Artikel -->
        <article class="bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-xs space-y-8">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="px-3.5 py-1 rounded-full text-xs font-black bg-blue-50 text-[#334EAC] border border-blue-100 uppercase">
                        {{ $post['category'] }}
                    </span>
                    <span class="text-xs font-bold text-slate-400 font-mono">{{ $post['date_label'] }}</span>
                    <span class="text-xs font-bold text-slate-400">• {{ $post['read_time'] }}</span>
                </div>

                <h1 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight leading-snug">
                    {{ $post['title'] }}
                </h1>

                <p class="text-xs text-slate-500 font-semibold">
                    Ditulis oleh: <span class="text-slate-900 font-bold">{{ $post['author'] }}</span>
                </p>
            </div>

            <!-- Thumbnail Banner -->
            <div class="rounded-2xl overflow-hidden h-72 md:h-96 w-full bg-slate-100">
                <img src="{{ str_starts_with($post['thumbnail'], 'http') ? $post['thumbnail'] : asset($post['thumbnail']) }}" 
                     alt="{{ $post['title'] }}" 
                     class="w-full h-full object-cover">
            </div>

            <!-- Content HTML -->
            <div class="prose prose-slate max-w-none text-slate-700 text-sm md:text-base leading-relaxed space-y-4 font-medium border-t border-slate-100 pt-6">
                {!! $post['content'] !!}
            </div>
        </article>

<!-- Rekomendasi Artikel Lain -->
        @if(!empty($relatedPosts))
            <section class="space-y-6 pt-6">
                <div class="border-b border-slate-200 pb-4">
                    <h2 class="text-xl font-black text-slate-900">Artikel Terkait Lainnya</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedPosts as $rel)
                        <a href="{{ url('/blog/' . $rel['slug']) }}" class="group relative overflow-hidden bg-white rounded-2xl border border-slate-200 p-5 shadow-xs transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-blue-500/20 hover:border-[#334EAC] space-y-3 block">
                            
                            {{-- Garis Aksen Hover Bergerak dari Atas --}}
                            <div class="absolute top-0 inset-x-0 w-full h-1.5 bg-[#334EAC] origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out z-20"></div>

                            <div class="relative z-10 space-y-2">
                                <span class="text-[10px] font-black text-[#334EAC] uppercase tracking-wider block">{{ $rel['category'] }}</span>
                                <h3 class="text-sm font-extrabold text-slate-900 group-hover:text-[#334EAC] transition-colors line-clamp-2">
                                    {{ $rel['title'] }}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

    </main>

    <x-footer />

</body>
</html>