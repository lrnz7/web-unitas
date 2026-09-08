<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Period;
use App\Models\Division;
use App\Models\Member;

class StructureImportSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Periode Utama
        $p24 = Period::firstOrCreate(['slug' => '2024-2025'], ['label' => 'Periode 2024–2025', 'is_active' => false]);
        $p25 = Period::firstOrCreate(['slug' => '2025-2026'], ['label' => 'Periode 2025–2026', 'is_active' => true]);
        $p26 = Period::firstOrCreate(['slug' => '2026-2027'], ['label' => 'Periode 2026–2027', 'is_active' => false]);

        // 2. Buat Master Divisi
        $divs = [
            'koordinator'  => 'Koordinator & BPH',
            'psdm'         => 'PSDM',
            'komwira'      => 'KOMWIRA',
            'pppm'         => 'PPPM',
            'kaderisasi'   => 'Kaderisasi',
            'kewirausahaan'=> 'Kewirausahaan',
            'kominfo'      => 'Kominfo',
        ];

        $divModels = [];
        foreach ($divs as $slug => $name) {
            $divModels[$slug] = Division::firstOrCreate(['slug' => $slug], ['name' => $name]);
        }

        // 3. Seed Data Periode 2025-2026 (Data Pengurus Aktif)
        $members2025 = [
            ['div' => 'koordinator', 'role' => 'Koordinator', 'name' => 'Lorenzo Calvin'],
            ['div' => 'koordinator', 'role' => 'Sekretaris', 'name' => 'Pengurus BPH 1'],
            ['div' => 'koordinator', 'role' => 'Bendahara', 'name' => 'Pengurus BPH 2'],
            ['div' => 'psdm', 'role' => 'Kepala Divisi PSDM', 'name' => 'Kadiv PSDM'],
            ['div' => 'komwira', 'role' => 'Kepala Divisi KOMWIRA', 'name' => 'Kadiv KOMWIRA'],
            ['div' => 'pppm', 'role' => 'Kepala Divisi PPPM', 'name' => 'Kadiv PPPM'],
        ];

        foreach ($members2025 as $m) {
            Member::create([
                'period_id'       => $p25->id,
                'division_id'     => $divModels[$m['div']]->id,
                'role'            => $m['role'],
                'name'            => $m['name'],
                'photo_primary'   => 'images/default-avatar.png',
                'photo_secondary' => null,
                'tupoksi'         => [],
            ]);
        }

        // 4. Seed Data Periode 2026-2027 (Data dari Blade)
        $members2026 = [
            ['div' => 'koordinator', 'role' => 'Koordinator', 'name' => 'M. Daffa Athaya'],
            ['div' => 'koordinator', 'role' => 'Wakil Koordinator', 'name' => 'M. Fathan Arbiansyah'],
            ['div' => 'koordinator', 'role' => 'Sekretaris', 'name' => 'Syahla Asyifa Nova'],
            ['div' => 'koordinator', 'role' => 'Bendahara', 'name' => 'Rahma Arsyita Saputri'],
            ['div' => 'psdm', 'role' => 'Kepala Divisi PSDM', 'name' => 'Alferdo Khevel Lilo'],
            ['div' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'Daffa Imam P'],
            ['div' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'M. Ivan Satrio'],
            ['div' => 'psdm', 'role' => 'Anggota PSDM', 'name' => 'Mutiara Aulia'],
            ['div' => 'komwira', 'role' => 'Kepala Divisi KOMWIRA', 'name' => 'Afif Faturrahmanudin'],
            ['div' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Nabil Nur Syaban'],
            ['div' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Ardita Putri Maharani'],
            ['div' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'TB. Adam Santana'],
            ['div' => 'komwira', 'role' => 'Anggota KOMWIRA', 'name' => 'Gilang Reihan'],
            ['div' => 'pppm', 'role' => 'Kepala Divisi PPPM', 'name' => 'Wardatun Nazwa Rohmah'],
            ['div' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Aldea Salwa Nur Safitri'],
            ['div' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Andhika Ricky'],
            ['div' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Rapiza Akbar'],
            ['div' => 'pppm', 'role' => 'Anggota PPPM', 'name' => 'Ferdy Irmansyah'],
        ];

        foreach ($members2026 as $m) {
            Member::create([
                'period_id'       => $p26->id,
                'division_id'     => $divModels[$m['div']]->id,
                'role'            => $m['role'],
                'name'            => $m['name'],
                'photo_primary'   => 'images/default-avatar.png',
                'photo_secondary' => null,
                'tupoksi'         => [],
            ]);
        }
    }
}