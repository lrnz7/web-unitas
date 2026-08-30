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
