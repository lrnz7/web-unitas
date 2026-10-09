# 📜 Changelog Web Unitas SI

Semua catatan perubahan, rilis fitur, dan pembaruan sistem dicatat dalam dokumen ini.

---

## [1.0.0] - 2026-08-29

### 🚀 Initial Release & Core Features Development

#### 🌐 Navigasi & Tampilan Utama
- **Navbar & Footer**: Pembuatan komponen navigasi utama bergaya kapsul/pill dengan dropdown interaktif berbasis Alpine.js.
- **Halaman Statis & Informasi**: Integrasi halaman profil Unitas SI, profil Program Studi Sistem Informasi, dan struktur organisasi.

#### 🏛️ Modul Informasi Kampus (`/informasi`)
- **Akademis & Kurikulum**: Halaman informasi KRS, alur pembayaran biaya kuliah, aturan akademik, serta daftar mata kuliah Prodi SI.
- **Denah Kampus**: Visualisasi peta lokasi Kampus A, B, dan C Unindra.
- **Pengambilan Atribut**: Informasi panduan dan jadwal lengkap pengambilan atribut mahasiswa.

#### 🎉 Modul Event & Dokumentasi (`/events`)
- **Daftar Kegiatan**: Sistem katalog program kerja Unitas SI lengkap dengan filter kategori, sorting (terbaru/terlama), dan paginasi *client-side*.
- **Detail Event & Galeri**: Halaman spesifik per event (`/events/{slug}`) memuat deskripsi lengkap dan galeri dokumentasi foto.

#### 📰 Modul Blog & Artikel (`/blog`)
- **Katalog Artikel**: Halaman daftar artikel dengan *search bar* instan, filter kategori, estimasi waktu baca, serta halaman detail postingan (`/blog/{slug}`).

#### 💬 Modul Kontak & Ruang Interaksi (`/kontak`)
- **Hubungi Kami**: Halaman informasi kanal resmi (Email Unitas, WhatsApp Official, dan lokasi Sekretariat).
- **Suara Mahasiswa (Aspirasi)**: Form interaktif pengiriman kritik, saran, dan keluhan mahasiswa dengan validasi input NPM wajib dan state sukses.
- **Tulis & Kirim Artikel**: Form submission draf tulisan mahasiswa yang memerlukan kurasi/persetujuan admin sebelum diterbitkan ke Blog.

#### ⏳ Modul Coming Soon & Perangkat Sistem
- **Halaman Coming Soon**: Desain placeholder bersih dan kontras untuk modul **Open Recruitment (`/oprec`)** dan **Sisformerch (`/shop`)**.
- **Dokumentasi & Konfigurasi**: Pembuatan file `ARCHITECTURE.md` dan `CHANGELOG.md`, serta konfigurasi `.gitignore` untuk proteksi file aset berskala besar.

---

## [1.1.0] - 2026-08-29

### 🚀 Core Features Development & Data Updates

#### 🏛️ Pembaruan Struktur Pengurus
- **Data Pengurus 2025/2026**: Menambahkan data dan foto pengurus periode 2025/2026 pada Koordinator & BPH, PSDM, serta PPPM.
- **Manajemen Aset Foto**: Memperbarui path dan file gambar formal serta pose untuk anggota divisi yang sudah lengkap (divisi Komwira menyusul menunggu kelengkapan foto).

---

## [2.0.0] - 2026-08-30

### 🚀 Major Visual, Structural & Feature Overhaul

#### 🏛️ Modul Organisasi & Pengurus
- **Pemisahan Periode Layout**: Memisahkan logika layout struktur pengurus antara periode 2024–2025 (grid center) dan periode 2025–2026 hingga 2026–2027 (hierarki struktural lengkap Kepala Divisi di atas dan anggota di bawah).
- **Pembaruan Data Pengurus**: Menambahkan data lengkap struktur kepengurusan baru untuk periode 2026/2027 (Koordinator M. Daffa Athaya, BPH, PSDM, KOMWIRA, dan PPPM) serta merapikan data periode 2024/2025.
- **Asset Foto & Efek Hover**: Memperbaiki path foto sekunder/pose serta menyempurnakan animasi *hover* berganti foto pada pengurus periode aktif tanpa ada elemen yang patah.

#### 🌐 Navigasi & Tampilan Utama (`Navbar & Hero`)
- **Perubahan CTA Hero**: Mengubah tombol aksi utama (*Call to Action*) di bagian *hero* halaman utama dari "Lihat Struktural Organisasi" menjadi "About Us".
- **Rebranding Menu Hubungi Kami**: Mengganti nama menu "Hubungi Kami" menjadi **"Partisipasi"** sebagai pusat interaksi mahasiswa.
- **Modul Partisipasi & Interaksi**: Memindahkan dan mewadahi fitur-fitur interaktif baru seperti *voting pilkoor* dan *open recruitment* (oprec) ke dalam kanal Partisipasi.

#### 📄 Integrasi Konten & Halaman Statis
- **Integrasi Laman Informasi**: Memasukkan dan menyelaraskan data penting yang ditarik langsung dari laman informasi ke dalam struktur web.
- **Perombakan About & Prodi**: Merombak total narasi serta tata letak pada halaman profil organisasi (*About Unitas*) dan profil Program Studi agar tampil lebih tajam dan representatif.

#### 📰 Modul Blog & Artikel
- **Efek Hover Kartu Terkait**: Menambahkan animasi *hover* eksklusif (garis aksen biru dari atas, efek naik, dan bayangan *glow*) pada kartu "Artikel Terkait Lainnya" di halaman detail blog (`show.blade.php`).

#### 🛠️ Desain Sistem Global & Footer Profesional
- **Desain Sistem (`app.css`)**: Menambahkan kelas utilitas global untuk *glassmorphism* halus, *smooth scroll*, dan *scrollbar* minimalis yang konsisten di seluruh halaman.
- **Perombakan Total Footer**: 
  - Menghapus menu navigasi footer yang menumpuk.
  - Menyematkan ikon media sosial resmi berbasis SVG murni khusus untuk **Instagram, TikTok, dan YouTube**.
  - Mengaktifkan tautan langsung (*clickable*) ke nomor WhatsApp organisasi (`+6289638943275`) dan email resmi (`unitassi@unindra.ac.id`).
  - Memperbarui teks *copyright* menjadi `© 2025–2026 Unitas Sistem Informasi. All rights reserved.` serta merapikan struktur tata letaknya menggunakan fleksibilitas murni agar sejajar sempurna.

---

## [2.2.0] - 2026-09-10

### 🛠️ Refactoring Struktural & Desain Visual

#### 🏛️ Halaman Struktural Organisasi (`/struktur`)
- **Refactoring Layout**: Melakukan refactoring total pada struktur layout halaman untuk periode 2025–2026 dan 2026–2027. CSS dan logika Alpine.js disederhanakan untuk menghilangkan kompleksitas dan memperbaiki *rendering* tampilan.
- **Perubahan Dasar Layout**:
  - Wrapper utama diubah menjadi `bg-transparent` dan `relative` untuk menghilangkan lapisan latar belakang `bg-slate-950` yang menyebabkan duplikasi visual dan menimpa *background* divisual.
  - Lapisan gambar latar belakang (Layer 1) dan *scrim* (Layer 2) di-upgrade menjadi elemen dengan `z-0` (lapisan terbawah) dan sepenuhnya menggunakan `fixed inset-0`. Sebelumnya, *scrim* menggunakan `z-10` dan elemen *wrapper* tidak memiliki `z-index`, menyebabkan konflik visual dengan *fixed background*.
- **Perbaikan Visual & Z-Index**:
  - Menambahkan logika `x-show` yang didorong ke lapisan paling dalam (Lapisan 1 dan 2) agar *background* dan *scrim* dapat merender dengan benar tanpa terhalang oleh elemen konten (`relative z-10`).
  - Menambahkan penanganan `onerror` pada elemen `<img>` untuk menampilkan *placeholder* gambar jika file aset tidak ditemukan, mencegah elemen menjadi hilang atau patah.

#### 🎨 Gaya & Estetika (`app.css`)
- **Desain Ulang Hero Section**:
  - Mengganti warna `hero-glass-container` dari transparan menjadi biru tua (`bg-blue-950/40`) untuk menciptakan kontras yang lebih tajam dan mewah terhadap *background* foto yang cerah.
  - Menghapus *scrollbar* bawaan sistem (`scrollbar-hide`) secara global di seluruh tubuh halaman untuk estetika visual yang bersih.
  - **Modern Dual-Layer Drop Shadow**: Penggunaan teknik `.text-clean-readable` untuk menghadirkan tipografi tajam, estetik, dan mudah dibaca di atas background dengan tekstur ramai.
  - **Master Glass Containment**: Pembungkusan kelompok header, dropdown periode, filter divisi, dan tupoksi ke dalam single glass container (`bg-slate-900/60 backdrop-blur-md rounded-3xl`).
  - **Micro-interaction & Layout Fixes**: Meringkas format label periode menjadi versi modern (2025/26), serta membersihkan *whitespace/seam* di bawah header.

#### 🛡️ Admin Panel, Auth & Keamanan
- **Authentication Middleware**: Mengamankan seluruh grup rute `/admin` menggunakan middleware `auth`.
- **Credential System**: Penambahan halaman login (`/login`), `AuthController.php`, dan `AdminSeeder.php` untuk manajemen akun administrator.
- **Konsistensi Sidebar UI**: Menyamakan struktur `<nav>` di seluruh view admin (Dashboard, Submissions, Articles, Events, Members) lengkap dengan kontrol tombol Logout.

#### 💾 Backend, Arsitektur Data & CMS
- **Full Structural Persistence**: Migrasi seluruh data pengurus periode 2024/2025, 2025/2026 (34 anggota asli), dan 2026/2027 ke database via `StructureSeeder.php`.
- **Dual-Path Asset Logic**: Integrasi foto statis (`public/images/pengurus/`) dan foto dinamis (`storage/members/`) tanpa memutus fitur hover pose.
- **Admin Filter Periode**: Penambahan dropdown filter periode di `/admin/members` untuk efisiensi tabel pengurus.
- **Unifikasi Artikel (Hybrid Blog System)**: Penggabungan data artikel database dengan legacy `blog.json`, perbaikan kalkulasi `read_time`, dan otomatisasi URL slug unik.
- **File-Based Event Management**: Implementasi sistem CRUD penuh untuk `events.json` via `/admin/events`, termasuk update foto cover dan link Google Drive dokumentasi.

---

## [2.3.0] - 2026-09-15

### 🚀 Pembaruan Utama & Penyempurnaan Visual Struktural

#### 🏛️ Halaman Struktural Organisasi (`/struktur`)
- **Standar Aspek Rasio Foto Latar Belakang (16:9)**:
  - Melakukan migrasi dan penyesuaian total pada seluruh aset foto grup divisi/angkatan menggunakan aspek rasio 16:9 Landscape.
  - Menghapus logika *ambient blur* di sisi kiri-kanan serta membuang mode `object-contain` yang sebelumnya sempat membuat tampilan tidak proporsional.
  - Mengonfigurasi ulang elemen latar belakang menggunakan pendekatan *full viewport display* (`object-cover object-center`) yang memastikan foto grup tampil secara penuh, tajam, dan proporsional di berbagai ukuran layar desktop tanpa terpotong.
- **Penyempurnaan Efek Glassmorphism**:
  - Mengubah tingkat transparansi dan efek buram pada kartu pengurus, kotak Tupoksi, serta tombol navigasi periode/divisi menjadi gaya transparan bening modern (`bg-slate-900/40 backdrop-blur-2xl` dengan border tipis `border-white/30`).
  - Penambahan teknik *drop shadow* pada teks dan elemen di dalam kartu untuk memastikan legibilitas tetap tajam dan kontras di atas latar belakang foto yang dinamis.
- **Pemulihan Detail Tugas (Tupoksi Individu)**:
  - Mengembalikan blok perulangan data Tupoksi individu untuk jajaran Badan Pengurus Harian (BPH) dan Koordinator yang sebelumnya sempat terlewat saat restrukturisasi komponen kartu.

#### 🎨 Desain Global & Komponen Pendukung
- **Redesain Footer Komponen (`footer.blade.php`)**:
  - Melakukan *refactoring* pada file komponen footer untuk varian *light mode*, mengubah basis inline CSS lama menjadi kelas utilitas Tailwind penuh.
  - Menyerasikan gaya visual footer agar selaras dengan Navbar atas melalui penerapan *glassmorphism* bening (`bg-white/80 backdrop-blur-xl`).
  - Menambahkan properti posisi `relative z-20` secara eksplisit pada footer untuk mengatasi konflik *z-index* dengan lapisan latar belakang halaman utama.

---

## [2.4.0] - 2026-09-21

### 👨‍💻 Modul Informasi Akademis, Admin CMS, & Layout Architecture Refactoring

#### 🛠️ Core Bug Fixes & Architecture Refactoring
- **Category Mismatch Resolution (Database vs Frontend)**:
  - **Sebelumnya**: Dropdown opsi pada Form Admin Panel menginput kategori lama (*Jadwal Praktikum*, *Pengumuman Akademik*, *Panduan Ujian*), sementara filter frontend menggunakan kategori gabungan (*Panduan KRS & Praktikum*, *Biaya & Syarat Ujian*, *Ensiklopedi Sisfor*). Hal ini menyebabkan data dari database tidak pernah tampil di tab mana pun.
  - **Sesudahnya**: Opsi kategori pada Admin Panel diselaraskan 100% dengan tab navigasi publik (*Panduan KRS & Praktikum*, *Biaya & Syarat Ujian*, dan *Ensiklopedi Sisfor*).

- **Fix Blade Parser Exception (Malformed `@foreach`)**:
  - **Sebelumnya**: Terjadi `ViewCompilationException` akibat sintaks `@foreach` yang terbungkus kurung ganda `(($data) as$item)` serta hilangnya spasi antara keyword `as` dan nama variabel.
  - **Sesudahnya**: Sintaks Blade dibersihkan sesuai standar compiler Laravel: `@foreach ($data as$item)`.

- **Fix Missing Route Context**:
  - **Sebelumnya**: Route `/informasi/akademis` di `routes/web.php` hanya membaca file JSON lokal tanpa mengeksekusi query database Model `Information`.
  - **Sesudahnya**: Route diperbarui untuk menarik seluruh record aktif langsung dari MySQL: `Information::where('is_active', true)->latest()->get()` dan mempassingnya ke View.

- **Fix Broken Inline JS Escaping (Data Attributes & Search Filter)**:
  - **Refaktor**: Memperbaiki potensi *breakage* pada atribut `json_encode()` akibat pembatas kutip ganda (`"`) serta pencarian string via template literal backtick (`` ` ``) ketika judul/excerpt memuat karakter khusus.

#### 🎨 UI/UX & Design System Enhancements
- **Pattern Preview Card & Modal Detail Pop-Up**: Mengganti render *wall of text* (konten penuh ditaruh langsung di kartu) dengan pola **Preview Card + Pop-Up Modal Detail** berbasis Alpine.js.

- **Uniform Card Layout & Height Alignment**: Menerapkan CSS `line-clamp-2` pada judul dan `line-clamp-3` pada excerpt untuk menjaga konsistensi tinggi kartu (*grid height uniformity*).

- **Visual Anchor & Color-Coding System**: Menambahkan *Accent Top Bar* dan *Color Coding* berbasis kategori untuk memberikan hirarki visual yang tegas:
  - **Panduan KRS & Praktikum**: Accent Blue (`#334EAC`)
  - **Biaya & Syarat Ujian**: Accent Amber (`#D97706`)
  - **Ensiklopedi Sisfor**: Accent Indigo (`#4F46E5`)

- **Micro-Interactions & Affordance**: Menambahkan efek *Hover Lift* (`-translate-y-1.5`), pelebaran aksen garis, serta transisi gerak pada indikator panah (`→`) saat kartu di-hover.

- **Instant Client-Side Search**: Kolom pencarian kini menyaring kartu secara *real-time* menggunakan Alpine.js tanpa perlu *reload* halaman.

#### ⚙️ Modifikasi & Revisi Admin Panel (`admin/informasi`)
- **Penyelarasan Option Dropdown Kategori**: Mengubah elemen `<select name="category">` pada file `resources/views/admin/informasi/index.blade.php` dan `edit.blade.php` menjadi: *Panduan KRS & Praktikum*, *Biaya & Syarat Ujian*, dan *Ensiklopedi Sisfor*.

- **Manajemen Lampiran Gambar/Dokumen**: Mendukung unggah gambar/infografis pendukung yang terintegrasi langsung dengan *modal pop-up* di halaman depan.

- **Integrasi Status Aktif (`is_active`)**: Menambahkan *toggle checkbox* `is_active` untuk mengontrol visibilitas postingan di halaman publik secara dinamis.

#### 🔗 Deep-Linking & Interactive Share Features
- **Dynamic Query Parameter & Auto-Trigger Modal (`?open=ID`)**:
  - **State Management**: Menambahkan fungsi inisialisasi Alpine.js (`init()`) untuk membaca URL *search parameters* secara otomatis saat halaman dimuat (`window.location.search`).
  - **Auto-Routing & Auto-Open**: Sistem otomatis mendeteksi parameter `?open=ID` dari tautan eksternal (seperti WhatsApp), mencari data informasi yang sesuai di array koleksi, memicu *pop-up modal detail*, sekaligus mengalihkan tab navigasi kategori secara otomatis.

- **Fitur "Salin Link" Interaktif (Clipboard API)**:
  - **Clipboard API Integration**: Menambahkan fungsi `copyLink(id)` di dalam modal detail untuk menyalin tautan spesifik (`window.location.origin + window.location.pathname + ?open=ID`) langsung ke clipboard perangkat.
  - **Dynamic Domain Resolution**: Tautan yang disalin bersifat dinamis mengikuti domain/URL yang aktif (*development* lokal maupun hosting *production*).
  - **UI Feedback State**: Indikator visual berupa perubahan teks tombol menjadi **"Link Berhasil Disalin! ✓"** selama 2 detik untuk memberikan kepastian (*feedback*) bagi pengguna.

#### 🔍 Global Search Integration & Content Indexing
- **Fix Tab-Isolation Search Limitation**:
  - **Sebelumnya**: Pencarian menggunakan filter `x-show` per tab kategori, sehingga kata kunci di luar tab aktif tidak akan pernah muncul (hasil kosong).
  - **Sesudahnya**: Memisahkan logika tampilan menggunakan *computed property* Alpine.js (`searchResults`). Saat kolom pencarian diisi, sistem otomatis mengabaikan batasan tab dan memindai seluruh data dari semua kategori secara serentak.

- **Fix Incomplete Content Indexing**:
  - **Sebelumnya**: Pencarian hanya membaca string dari `title` dan `excerpt`.
  - **Sesudahnya**: Menambahkan parameter `content` ke dalam fungsi pencarian string, memastikan pencarian mencakup judul, ringkasan, hingga isi deskripsi lengkap di dalam modal.
  
- **Fix Null/Undefined Exception & UI State Management**:
  - Menerapkan *string fallback* `(item.content || '').toLowerCase()` untuk mengantisipasi data `null` dari database.
  - Menambahkan indikator **Clear Search Button** (`× Bersihkan Pencarian`) serta tampilan *Empty State* dinamis saat kata kunci tidak ditemukan.

#### 📐 Layout Normalization & Grid Alignment (Information Corner)
- **Fix Asymmetric Container Width & Margin**:
  - **Sebelumnya**: Komponen `info-corner` menggunakan struktur kontainer dan grid standar (`grid-cols-2`) yang tidak seragam dengan section lain di sekitarnya, membuat batas kartu terlihat tidak sejajar.
  - **Sesudahnya**: Menyamakan struktur kontainer luar menggunakan wrapper `max-w-[1440px] px-6 lg:px-12` dan menerapkan sistem grid presisi **12-kolom Tailwind (`grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8`)** dengan ukuran kartu `lg:col-span-6`. Hasilnya, layout sejajar presisi (*aligned*) dengan `about-section` dan `academic-section`.


  ## Release v2.3.1

### 🎨 UI/UX & Responsive Refactoring
- 📱 **Mobile Structural Layout**: Implemented **Hybrid Card Aspect-Ratio (16:9)** header banner for mobile viewports to prevent landscape image cropping.
- 🏷️ **Mobile Division Overlay**: Relocated full division titles to **Center-Bottom Overlay** inside group banner images with dark gradient masks.
- ✨ **Glassmorphism Consistency**: Unified mobile & desktop component styling using `bg-slate-900/60` and `backdrop-blur-2xl` to eliminate unwanted white block artifacts on mobile.
- 🔘 **Filter Tab Buttons**: Fixed inactive tab state on mobile from solid white to transparent glassmorphism (`bg-white/20`) while maintaining `#334EAC` Royal Blue active highlights.

### 🐛 Bug Fixes
- 🖼️ **Brand Logo Path**: Resolved broken image rendering in `navigation.blade.php` by aligning asset paths with `public/images/`.
- 🔤 **Contrast & Visibility**: Fixed unreadable dark text (`text-slate-900`) on dark backgrounds in mobile Tupoksi and division titles.

---
**Core Brand Preservation**: All accent colors remain locked to `#334EAC` Royal Blue with Minimalist White foundational layout structure.