<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Period;
use App\Models\Division;
use App\Models\Member;

class StructureSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Data Periode
        $period2024 = Period::create([
            'slug' => '2024-2025',
            'label' => '2024/2025',
            'is_active' => false,
        ]);

        $period2025 = Period::create([
            'slug' => '2025-2026',
            'label' => '2025/2026',
            'is_active' => true,
        ]);

        $period2026 = Period::create([
            'slug' => '2026-2027',
            'label' => '2026/2027',
            'is_active' => false,
        ]);

        // ==========================================
        // 2. PERIODE 2024-2025
        // ==========================================
        $divs2024 = [
            'koordinator' => Division::create(['slug' => 'koordinator-24', 'name' => 'Koordinator & BPH']),
            'psdm' => Division::create(['slug' => 'psdm-24', 'name' => 'PSDM']),
            'komwira' => Division::create(['slug' => 'komwira-24', 'name' => 'Kewirausahaan']),
            'kominfo' => Division::create(['slug' => 'kominfo-24', 'name' => 'Kominfo']),
        ];

        $members2024 = [
            ["div" => "koordinator", "role" => "Koordinator", "name" => "M. Roihan Hidayatullah", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Memimpin jalannya organisasi periode 2024/2025."]],
            ["div" => "koordinator", "role" => "Sekretaris", "name" => "Jane Janitra M.A", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Mengelola administrasi dan kesekretariatan."]],
            ["div" => "koordinator", "role" => "Bendahara", "name" => "M. Asriel Amri", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Mengelola keuangan organisasi."]],

            ["div" => "psdm", "role" => "Kepala Divisi PSDM", "name" => "Manda Christoffel Kowas", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Memimpin divisi PSDM."]],
            ["div" => "psdm", "role" => "Anggota PSDM", "name" => "Narendro Ageng Winarsis", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Mengembangkan sumber daya manusia."]],

            ["div" => "komwira", "role" => "Kepala Divisi Kewirausahaan", "name" => "Deden Taufiqurrahman", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Mengelola dana usaha organisasi."]],

            ["div" => "kominfo", "role" => "Kepala Divisi Kominfo", "name" => "Fazri Aziz Siregar", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Mengelola media dan informasi."]],
            ["div" => "kominfo", "role" => "Anggota Kominfo", "name" => "Naufal Rafi Mudzafar", "p1" => "images/pengurus/default-1.jpg", "p2" => "images/pengurus/default-2.jpg", "tupoksi" => ["Mendukung publikasi media organisasi."]],
        ];

        foreach ($members2024 as $m) {
            Member::create([
                'period_id' => $period2024->id,
                'division_id' => $divs2024[$m['div']]->id,
                'role' => $m['role'],
                'name' => $m['name'],
                'photo_primary' => $m['p1'],
                'photo_secondary' => $m['p2'],
                'tupoksi' => $m['tupoksi'],
            ]);
        }

        // ==========================================
        // 3. PERIODE 2025-2026 (FULL 34 ANGGOTA AWAL)
        // ==========================================
        $divs2025 = [
            'koordinator' => Division::create(['slug' => 'koordinator', 'name' => 'Koordinator & BPH']),
            'psdm' => Division::create(['slug' => 'psdm', 'name' => 'PSDM']),
            'komwira' => Division::create(['slug' => 'komwira', 'name' => 'KOMWIRA']),
            'pppm' => Division::create(['slug' => 'pppm', 'name' => 'PPPM']),
        ];

        $members2025 = [
            // Koordinator & BPH
            ["division" => "koordinator", "role" => "Koordinator", "name" => "Bintang Afif Hikam", "photo_primary" => "images/pengurus/2025/afif-1.jpg", "photo_secondary" => "images/pengurus/2025/afif-2.jpg", "tupoksi" => ["Memimpin dan mengoordinasikan jalannya organisasi.", "Menetapkan arah, kebijakan, dan strategi organisasi unitas.", "Mengawasi kinerja seluruh divisi.", "Menjadi penanggung jawab utama kegiatan organisasi unitas."]],
            ["division" => "koordinator", "role" => "Sekretaris", "name" => "Nabila Azzahra Isnanta Saleh", "photo_primary" => "images/pengurus/2025/nabila-1.jpg", "photo_secondary" => "images/pengurus/2025/nabila-2.jpg", "tupoksi" => ["Mengelola administrasi organisasi.", "Mengatur surat-surat masuk dan keluar.", "Membuat dan mendistribusikan surat-menyurat.", "Menyusun jadwal kegiatan dan rapat.", "Mengarsipkan dokumen organisasi."]],
            ["division" => "koordinator", "role" => "Wakil Koordinator I", "name" => "R Galih Gumilar Wk", "photo_primary" => "images/pengurus/2025/galih-1.jpg", "photo_secondary" => "images/pengurus/2025/galih-2.jpg", "tupoksi" => ["Mengoordinasikan pelaksanaan program kerja seluruh divisi.", "Menjadi penghubung antara Koordinator dengan setiap kepala divisi.", "Memastikan setiap divisi memiliki arah kerja, target, dan timeline yang jelas.", "Memfasilitasi kebutuhan divisi, termasuk koordinasi penggunaan waktu, tempat, dan sarana kegiatan.", "Membantu menyelesaikan kendala yang dihadapi divisi selama menjalankan program kerja.", "Mendorong kolaborasi dan sinergi antar divisi.", "Menggantikan tugas Koordinator apabila berhalangan hadir."]],
            ["division" => "koordinator", "role" => "Wakil Koordinator II", "name" => "Ridho Bhakti Wicaksono", "photo_primary" => "images/pengurus/2025/ridho-1.jpg", "photo_secondary" => "images/pengurus/2025/ridho-2.jpg", "tupoksi" => ["Mewakili organisasi dalam forum koordinasi, rapat, atau kegiatan lintas organisasi.", "Memastikan seluruh kegiatan organisasi sesuai dengan AD/ART, SOP, dan peraturan kampus.", "Melakukan pengawasan terhadap pelaksanaan kebijakan organisasi.", "Memberikan masukan terkait tata kelola organisasi agar tetap berjalan sesuai ketentuan.", "Berkoordinasi dengan pembina, program studi, atau pihak kemahasiswaan terkait administrasi dan perizinan kegiatan.", "Mengawasi kepatuhan pengurus terhadap aturan organisasi dan etika kepengurusan.", "Mendampingi Koordinator dalam pengambilan keputusan yang berkaitan dengan hubungan eksternal dan kebijakan organisasi."]],
            ["division" => "koordinator", "role" => "Bendahara", "name" => "Evi Solemah Ariyanti", "photo_primary" => "images/pengurus/2025/evi-1.jpg", "photo_secondary" => "images/pengurus/2025/evi-2.jpg", "tupoksi" => ["Mengelola keuangan organisasi secara transparan dan akuntabel.", "Menyusun anggaran pemasukan dan pengeluaran.", "Mencatat serta membuat pembukuan keuangan.", "Menyampaikan laporan keuangan secara berkala.", "Mengawasi penggunaan dana pada setiap kegiatan."]],
            
            // PSDM
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Syahrul Frimansyah", "photo_primary" => "images/pengurus/2025/syahrul-1.jpg", "photo_secondary" => "images/pengurus/2025/syahrul-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Ade Aulia Rahman", "photo_primary" => "images/pengurus/2025/ade-1.jpg", "photo_secondary" => "images/pengurus/2025/ade-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Ahmad Maulana Putra", "photo_primary" => "images/pengurus/2025/ahmad-1.jpg", "photo_secondary" => "images/pengurus/2025/ahmad-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Lorenzo Calvin", "photo_primary" => "images/pengurus/2025/lorenzo-1.jpg", "photo_secondary" => "images/pengurus/2025/lorenzo-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Muhamad Adriansyah", "photo_primary" => "images/pengurus/2025/adriansyah-1.jpg", "photo_secondary" => "images/pengurus/2025/adriansyah-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Nevityas Puspakania", "photo_primary" => "images/pengurus/2025/nevityas-1.jpg", "photo_secondary" => "images/pengurus/2025/nevityas-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            ["division" => "psdm", "role" => "Anggota PSDM", "name" => "Nur Azizah Riyanto", "photo_primary" => "images/pengurus/2025/azizah-1.jpg", "photo_secondary" => "images/pengurus/2025/azizah-2.jpg", "tupoksi" => ["Mengelola proses perekrutan dan pembinaan anggota baru.", "Menyediakan sarana pengembangan diri bagi anggota.", "Menyelenggarakan kokulikuler.", "Membentuk kader yang berkomitmen dan siap melanjutkan kepengurusan."]],
            
            // Komwira
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Maulidia Ramadhani Azahra", "photo_primary" => "images/pengurus/2025/maulidia-1.jpg", "photo_secondary" => "images/pengurus/2025/maulidia-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar.", "Mengelola media sosial dan platform komunikasi organisasi."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Diaz Bintang Ramadhan", "photo_primary" => "images/pengurus/2025/diaz-1.jpg", "photo_secondary" => "images/pengurus/2025/diaz-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Helmy Fazri Julianto", "photo_primary" => "images/pengurus/2025/helmy-1.jpg", "photo_secondary" => "images/pengurus/2025/helmy-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Herlina Nurul Sa'diah", "photo_primary" => "images/pengurus/2025/herlina-1.jpg", "photo_secondary" => "images/pengurus/2025/herlina-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Laila Suryani Tanjung", "photo_primary" => "images/pengurus/2025/laila-1.jpg", "photo_secondary" => "images/pengurus/2025/laila-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Muhammad Rifqi Arrahman", "photo_primary" => "images/pengurus/2025/rifqi-1.jpg", "photo_secondary" => "images/pengurus/2025/rifqi-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Naufal Rizki Ananta", "photo_primary" => "images/pengurus/2025/naufal-1.jpg", "photo_secondary" => "images/pengurus/2025/naufal-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Nazwa Auliya", "photo_primary" => "images/pengurus/2025/nazwa-1.jpg", "photo_secondary" => "images/pengurus/2025/nazwa-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Rama Ramdana", "photo_primary" => "images/pengurus/2025/rama-1.jpg", "photo_secondary" => "images/pengurus/2025/rama-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Rifdho Alfiandra Afroni", "photo_primary" => "images/pengurus/2025/rifdho-1.jpg", "photo_secondary" => "images/pengurus/2025/rifdho-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Shofiatunnisa", "photo_primary" => "images/pengurus/2025/shofi-1.jpg", "photo_secondary" => "images/pengurus/2025/shofi-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],
            ["division" => "komwira", "role" => "Anggota Komwira", "name" => "Yatrib Farrij Hanif Nurshofa", "photo_primary" => "images/pengurus/2025/yatrib-1.jpg", "photo_secondary" => "images/pengurus/2025/yatrib-2.jpg", "tupoksi" => ["Menyampaikan informasi organisasi kepada anggota maupun pihak luar."]],

            // PPPM
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Achmad Reihan Rusli", "photo_primary" => "images/pengurus/2025/reihan-1.jpg", "photo_secondary" => "images/pengurus/2025/reihan-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Davina Nur Maulidia", "photo_primary" => "images/pengurus/2025/davina-1.jpg", "photo_secondary" => "images/pengurus/2025/davina-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Fakhri Al Abas Fauzi", "photo_primary" => "images/pengurus/2025/fakhri-1.jpg", "photo_secondary" => "images/pengurus/2025/fakhri-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Fauzan Kirana Faiq Wibowo", "photo_primary" => "images/pengurus/2025/fauzan-1.jpg", "photo_secondary" => "images/pengurus/2025/fauzan-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Fikri Al Islami", "photo_primary" => "images/pengurus/2025/fikri-1.jpg", "photo_secondary" => "images/pengurus/2025/fikri-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Mawla Valiza Namira", "photo_primary" => "images/pengurus/2025/mawla-1.jpg", "photo_secondary" => "images/pengurus/2025/mawla-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Rizky Dwi Alvanto", "photo_primary" => "images/pengurus/2025/alvanto-1.jpg", "photo_secondary" => "images/pengurus/2025/alvanto-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Zya Aqilla Zhifa", "photo_primary" => "images/pengurus/2025/zya-1.jpg", "photo_secondary" => "images/pengurus/2025/zya-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Rifha Fadilla Atmaja", "photo_primary" => "images/pengurus/2025/rifha-1.jpg", "photo_secondary" => "images/pengurus/2025/rifha-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]],
            ["division" => "pppm", "role" => "Anggota PPPM", "name" => "Tiara Febriza", "photo_primary" => "images/pengurus/2025/tiara-1.jpg", "photo_secondary" => "images/pengurus/2025/tiara-2.jpg", "tupoksi" => ["Mengembangkan inovasi berbasis teknologi dan Sistem Informasi."]]
        ];

        foreach ($members2025 as $member) {
            Member::create([
                'period_id' => $period2025->id,
                'division_id' => $divs2025[$member['division']]->id,
                'role' => $member['role'],
                'name' => $member['name'],
                'photo_primary' => $member['photo_primary'],
                'photo_secondary' => $member['photo_secondary'],
                'tupoksi' => $member['tupoksi'],
            ]);
        }
    }
}