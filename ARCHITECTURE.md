# 🏗️ Arsitektur & Struktur Proyek Web Unitas SI

Dokumentasi teknis struktur direktori dan arsitektur sistem website resmi **Unitas Sistem Informasi (Unindra)**.

---

## 🛠️ Tech Stack
- **Framework**: Laravel 11.x
- **Frontend / Styling**: Tailwind CSS & Alpine.js
- **Database Engine**: SQLite / MySQL (Hybrid dengan JSON Store)

---

## 📂 Struktur Direktori Utama

```text
Web Unitas/
├── app/
│   ├── Http/Controllers/     # Controller logika aplikasi
│   ├── Models/               # Eloquent Models (Period, Division, Member, User)
│   └── Providers/            # Service Providers
├── bootstrap/                # Konfigurasi bootstrap & cache aplikasi
├── config/                   # File konfigurasi sistem (database, app, auth, dll)
├── data/                     # JSON Store (akademis, atribut, blog, denah, events, kontak, kurikulum, unitas)
├── database/                 # Migrations, seeders, factories, & SQLite database
├── public/                   # Public assets (favicon.ico, index.php, images/)
├── resources/
│   ├── css/                  # Styling aplikasi (Tailwind)
│   ├── js/                   # JavaScript & entrypoints (Alpine.js)
│   └── views/                # Blade views (components & pages)
├── routes/                   # Routing aplikasi (web.php & console.php)
└── storage/                  # Log framework, file session, dan storage app

🔄 Hybrid Data Design
Aplikasi ini menerapkan pendekatan Hybrid Data Storage:

JSON Data (/data): Menyimpan konten informasi statis/semi-dinamis (Akademis, Blog, Event, Kurikulum, Kontak, Denah) agar ringan dan mudah disunting.

Database Relasional (/database): Menyimpan data struktural dinamis organisasi (Periode, Divisi, dan Anggota) melalui Eloquent ORM.