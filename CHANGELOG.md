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


## [1.1.0] - 2026-08-29

### 🚀 Core Features Development

Struktur Pengurus 2025/2026: Menambahkan data dan foto pengurus periode 2025/2026 pada Koordinator & BPH, PSDM, serta PPPM.

Asset Foto Pengurus: Memperbarui path dan file gambar formal serta pose untuk anggota divisi yang sudah lengkap (sementara Divisi Komwira menyusul menunggu kelengkapan foto).


## [2.0.0] - 2026-08-30

### 🚀 Major Visual, Structural & Feature Overhaul

#### 🏛️ Modul Organisasi & Pengurus
- **Pemisahan Periode Layout**: Memisahkan logika layout struktur pengurus antara periode 2024–2025 (grid center) dan periode 2025–2026 hingga 2026–2027 (hierarki struktural lengkap Kepala Divisi di atas dan anggota di bawah).
- **Pembaruan Data Pengurus**: Menambahkan data lengkap struktur kepengurusan baru untuk periode 2026/2027 (Koordinator M. Daffa Athaya, BPH, PSDM, KOMWIRA, dan PPPM) serta merapikan data periode 2024/2025.
- **Asset Foto & Efek Hover**: Memperbaiki path foto sekunder/pose serta menyempurnakan animasi *hover* berganti foto pada pengurus periode aktif tanpa ada elemen yang patah.

#### 🌐 Navigasi & Tampilan Utama (`Navbar & Hero`)
- **Perubahan CTA Hero**: Mengubah tombol aksi utama (*Call to Action*) di bagian *hero* halaman utama dari "Lihat Struktural Organisasi" menjadi "About Us"[cite: 1].
- **Rebranding Menu Hubungi Kami**: Mengganti nama menu "Hubungi Kami" menjadi **"Partisipasi"**[cite: 1] sebagai pusat interaksi mahasiswa.
- **Modul Partisipasi & Interaksi**: Memindahkan dan mewadahi fitur-fitur interaktif baru seperti *voting pilkoor* dan *open recruitment* (oprec) ke dalam kanal Partisipasi[cite: 1].

#### 📄 Integrasi Konten & Halaman Statis
- **Integrasi Laman Informasi**: Memasukkan dan menyelaraskan data penting yang ditarik langsung dari laman informasi ke dalam struktur web[cite: 1].
- **Perombakan About & Prodi**: Merombak total narasi serta tata letak pada halaman profil organisasi (*About Unitas*) dan profil Program Studi agar tampil lebih tajam dan representatif[cite: 1].

#### 📰 Modul Blog & Artikel
- **Efek Hover Kartu Terkait**: Menambahkan animasi *hover* eksklusif (garis aksen biru dari atas, efek naik, dan bayangan *glow*) pada kartu "Artikel Terkait Lainnya" di halaman detail blog (`show.blade.php`).

#### 🛠️ Desain Sistem Global & Footer Profesional
- **Desain Sistem (`app.css`)**: Menambahkan kelas utilitas global untuk *glassmorphism* halus, *smooth scroll*, dan *scrollbar* minimalis yang konsisten di seluruh halaman.
- **Perombakan Total Footer**: 
  - Menghapus menu navigasi footer yang menumpuk[cite: 1].
  - Menyematkan ikon media sosial resmi berbasis SVG murni khusus untuk **Instagram, TikTok, dan YouTube**[cite: 1].
  - Mengaktifkan tautan langsung (*clickable*) ke nomor WhatsApp organisasi (`+6289638943275`) dan email resmi (`unitassi@unindra.ac.id`)[cite: 1].
  - Memperbarui teks *copyright* menjadi `© 2025–2026 Unitas Sistem Informasi. All rights reserved.`[cite: 1] serta merapikan struktur tata letaknya menggunakan fleksibilitas murni agar sejajar sempurna.

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
  - Menghapus *scrollbar* bawaan sistem (`scrollbar-hide`) secara global. Sebelumnya, *scrollbar* tersembunyi hanya di elemen-elemen tertentu, namun sekarang diterapkan di seluruh tubuh halaman untuk menciptakan estetika visual yang lebih bersih dan konsisten.
  - **Modern Dual-Layer Drop Shadow**: Penggunaan teknik `.text-clean-readable` untuk menghadirkan tipografi tajam, estetik, dan mudah dibaca di atas background dengan tekstur ramai.
  - **Master Glass Containment**: Pembungkusan kelompok header, dropdown periode, filter divisi, dan tupoksi ke dalam single glass container (`bg-slate-900/60 backdrop-blur-md rounded-3xl`) guna meningkatkan visual density.
  - **Micro-interaction & Layout Fixes**: Meringkas format label periode menjadi versi modern (2025/26), serta membersihkan whitespace/seam di bawah header agar alur layout seamless.


#### 🛡️ Admin Panel, Auth & Keamanan
- **Authentication Middleware**: Mengamankan seluruh grup rute /admin menggunakan middleware auth.
- **Credential System**: Penambahan halaman login (/login), AuthController.php, dan AdminSeeder.php untuk manajemen akun administrator.
- **Konsistensi Sidebar UI**: Menyamakan struktur <nav> di seluruh view admin (Dashboard, Submissions, Articles, Events, Members) lengkap dengan kontrol tombol Logout.

#### 💾 Backend, Arsitektur Data & CMS
- **Full Structural Persistence**: Migrasi seluruh data pengurus periode 2024/2025, 2025/2026 (34 anggota asli), dan 2026/2027 ke database via StructureSeeder.php.
- **Dual-Path Asset Logic**: Integrasi foto statis (public/images/pengurus/) dan foto dinamis (storage/members/) tanpa memutus fitur hover pose.
- **Admin Filter Periode**: Penambahan dropdown filter periode di /admin/members untuk efisiensi tabel pengurus.
- **Unifikasi Artikel (Hybrid Blog System)**: Penggabungan data artikel database dengan legacy blog.json, perbaikan kalkulasi read_time, dan otomatisasi URL slug unik.
- **File-Based Event Management**: Implementasi sistem CRUD penuh untuk events.json via /admin/events, termasuk update foto cover dan link Google Drive dokumentasi.