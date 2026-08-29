<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog & Berita - Unitas Sistem Informasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif; } </style>
</head>
<body class="w-full min-h-screen bg-slate-50 text-slate-800 antialiased flex flex-col selection:bg-[#334EAC] selection:text-white">

    <x-navbar />

    <main class="flex-1 py-12 px-6 max-w-7xl mx-auto w-full space-y-10"
          x-data="{
              posts: {{ json_encode($posts) }},
              searchQuery: '',
              selectedCategory: 'all',
              currentPage: 1,
              itemsPerPage: 6,

              get filteredPosts() {
                  let list = [...this.posts];

                  if (this.selectedCategory !== 'all') {
                      list = list.filter(p => p.category.toLowerCase() === this.selectedCategory.toLowerCase());
                  }

                  if (this.searchQuery.trim() !== '') {
                      let q = this.searchQuery.toLowerCase();
                      list = list.filter(p => p.title.toLowerCase().includes(q) || p.excerpt.toLowerCase().includes(q));
                  }

                  return list;
              },

              get totalPages() {
                  return Math.ceil(this.filteredPosts.length / this.itemsPerPage) || 1;
              },

              get paginatedPosts() {
                  let start = (this.currentPage - 1) * this.itemsPerPage;
                  return this.filteredPosts.slice(start, start + this.itemsPerPage);
              },

              nextPage() {
                  if (this.currentPage < this.totalPages) this.currentPage++;
              },

              prevPage() {
                  if (this.currentPage > 1) this.currentPage--;
              }
          }">
        
        <!-- Header Section -->
        <section class="text-center space-y-3">
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Blog & Artikel Unitas
            </h1>
            <p class="text-slate-500 text-sm md:text-base max-w-2xl mx-auto font-medium">
                Wawasan, tutorial teknologi, kabar kampus, serta kiat pengembangan karir mahasiswa SI.
            </p>
        </section>

        <!-- Filter & Search Bar -->
        <section class="bg-white p-4 rounded-2xl border border-slate-200 shadow-xs flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Filter Kategori Kapsul -->
            <div class="flex items-center gap-1.5 overflow-x-auto w-full md:w-auto scrollbar-hide py-1">
                <button @click="selectedCategory = 'all'; currentPage = 1" 
                        :class="selectedCategory === 'all' ? 'bg-[#334EAC] text-white font-black' : 'text-slate-600 hover:bg-slate-100 font-bold'"
                        class="px-4 py-2 rounded-full text-xs transition-all whitespace-nowrap">
                    Semua
                </button>
                <button @click="selectedCategory = 'tutorial'; currentPage = 1" 
                        :class="selectedCategory === 'tutorial' ? 'bg-[#334EAC] text-white font-black' : 'text-slate-600 hover:bg-slate-100 font-bold'"
                        class="px-4 py-2 rounded-full text-xs transition-all whitespace-nowrap">
                    Tutorial
                </button>
                <button @click="selectedCategory = 'kegiatan'; currentPage = 1" 
                        :class="selectedCategory === 'kegiatan' ? 'bg-[#334EAC] text-white font-black' : 'text-slate-600 hover:bg-slate-100 font-bold'"
                        class="px-4 py-2 rounded-full text-xs transition-all whitespace-nowrap">
                    Kegiatan
                </button>
                <button @click="selectedCategory = 'design'; currentPage = 1" 
                        :class="selectedCategory === 'design' ? 'bg-[#334EAC] text-white font-black' : 'text-slate-600 hover:bg-slate-100 font-bold'"
                        class="px-4 py-2 rounded-full text-xs transition-all whitespace-nowrap">
                    Design
                </button>
                <button @click="selectedCategory = 'karir'; currentPage = 1" 
                        :class="selectedCategory === 'karir' ? 'bg-[#334EAC] text-white font-black' : 'text-slate-600 hover:bg-slate-100 font-bold'"
                        class="px-4 py-2 rounded-full text-xs transition-all whitespace-nowrap">
                    Karir
                </button>
            </div>

            <!-- Search Field -->
            <div class="w-full md:w-72 shrink-0">
                <input type="text" 
                       x-model="searchQuery" 
                       @input="currentPage = 1"
                       placeholder="Cari artikel..." 
                       class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-xs font-bold rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#334EAC]">
            </div>
        </section>

        <!-- Grid Cards Blog -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[380px] items-start">
            <template x-for="post in paginatedPosts" :key="post.id">
                <a :href="'{{ url('/blog') }}/' + post.slug" class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl hover:border-blue-300 transition-all duration-300 flex flex-col justify-between group h-full">
                    <div class="space-y-4">
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img :src="post.thumbnail.startsWith('http') ? post.thumbnail : '{{ asset('') }}' + post.thumbnail" :alt="post.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <span x-text="post.category" class="absolute top-4 left-4 bg-[#334EAC] text-white text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-md"></span>
                        </div>

                        <div class="px-6 space-y-2">
                            <div class="flex items-center justify-between text-[11px] text-slate-400 font-semibold">
                                <span x-text="post.date_label"></span>
                                <span x-text="post.read_time"></span>
                            </div>
                            <h2 x-text="post.title" class="text-lg font-black text-slate-900 group-hover:text-[#334EAC] transition-colors leading-snug"></h2>
                            <p x-text="post.excerpt" class="text-xs text-slate-500 font-medium leading-relaxed line-clamp-2"></p>
                        </div>
                    </div>

                    <div class="p-6 pt-4 text-xs font-bold text-[#334EAC] flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Baca Selengkapnya</span>
                        &rarr;
                    </div>
                </a>
            </template>

            <div x-show="filteredPosts.length === 0" class="col-span-full py-16 text-center text-slate-400 font-bold text-sm">
                Artikel tidak ditemukan.
            </div>
        </section>

        <!-- Pagination Controls -->
        <section class="flex items-center justify-between border-t border-slate-200 pt-6">
            <span class="text-xs font-bold text-slate-500">
                Halaman <span x-text="currentPage"></span> dari <span x-text="totalPages"></span>
            </span>

            <div class="flex items-center gap-2">
                <button @click="prevPage()" 
                        :disabled="currentPage === 1"
                        :class="currentPage === 1 ? 'opacity-40 cursor-not-allowed' : 'hover:bg-[#334EAC] hover:text-white'"
                        class="px-4 py-2 rounded-xl bg-white border border-slate-200 text-xs font-extrabold text-slate-700 transition-all">
                    &larr; Previous
                </button>

                <button @click="nextPage()" 
                        :disabled="currentPage === totalPages"
                        :class="currentPage === totalPages ? 'opacity-40 cursor-not-allowed' : 'hover:bg-[#334EAC] hover:text-white'"
                        class="px-4 py-2 rounded-xl bg-white border border-slate-200 text-xs font-extrabold text-slate-700 transition-all">
                    Next &rarr;
                </button>
            </div>
        </section>

    </main>

    <x-footer />

</body>
</html>