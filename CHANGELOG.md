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


Changelog v1.1.0

Struktur Pengurus 2025/2026: Menambahkan data dan foto pengurus baru untuk periode 2025/2026 pada divisi Koordinator & BPH, PSDM, serta PPPM.

Asset Foto Pengurus: Memperbarui path dan file gambar formal serta pose untuk anggota divisi yang sudah lengkap (sementara Divisi Komwira menyusul menunggu kelengkapan foto).