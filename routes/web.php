<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Models\Period;
use App\Models\Division;
use App\Models\Member;

Route::get('/', function () {
    return view('welcome');
});

// Halaman About Program Studi SI
Route::get('/about/prodi', function () {
    $curriculumPath = base_path('data/kurikulum.json');
    $curriculum = file_exists($curriculumPath) ? json_decode(file_get_contents($curriculumPath), true) : [];
    
    return view('pages.prodi', compact('curriculum'));
});

// Halaman About Unitas SI
Route::get('/about/unitas', function () {
    return view('pages.unitas');
});

// Halaman Struktural (Hybrid System: JSON + MySQL)
Route::get('/about/struktural', function () {
    $periods = Period::all();
    $allPeriodData = [];

    foreach ($periods as $p) {
        $slug = $p->slug;
        $periodData = ['divisions' => [], 'members' => []];

        // Arsip 2024-2025 ambil dari JSON
        if ($slug === '2024-2025') {
            $jsonFileName = "structure/2024-2025.json";
            if (Storage::exists($jsonFileName)) {
                $periodData = json_decode(Storage::get($jsonFileName), true);
            }
        } 
        // Periode lainnya ambil dari MySQL
        else {
            $currentPeriod = Period::where('slug', $slug)->first();
            if ($currentPeriod) {
                $members = Member::with('division')->where('period_id', $currentPeriod->id)->get();
                $divisionIds = $members->pluck('division_id')->unique();
                $divisions = Division::whereIn('id', $divisionIds)->get();

                $periodData = [
                    'divisions' => $divisions->map(fn($d) => [
                        'id' => $d->slug,
                        'name' => $d->name
                    ])->toArray(),
                    'members' => $members->map(fn($m) => [
                        'id' => $m->id,
                        'division' => $m->division?->slug ?? '',
                        'role' => $m->role,
                        'name' => $m->name,
                        'photo_primary' => asset($m->photo_primary),
                        'photo_secondary' => asset($m->photo_secondary),
                        'tupoksi' => is_array($m->tupoksi) ? $m->tupoksi : []
                    ])->toArray()
                ];
            }
        }

        $allPeriodData[$slug] = $periodData;
    }

    $structure = [
        'periods' => $periods->map(fn($p) => [
            'id' => $p->slug,
            'label' => $p->label,
            'active' => (bool)$p->is_active
        ])->toArray(),
        'data' => $allPeriodData
    ];

    return view('pages.struktural', compact('structure'));
});

// Route Group: Informasi Mahasiswa
Route::prefix('informasi')->group(function () {

    // 1. Akademis & Kurikulum (Satu Halaman Terintegrasi)
    Route::get('/akademis', function () {
        $curriculumPath = base_path('data/kurikulum.json');
        $curriculum = file_exists($curriculumPath) ? json_decode(file_get_contents($curriculumPath), true) : [];

        $akademisPath = base_path('data/akademis.json');
        $akademisData = file_exists($akademisPath) ? json_decode(file_get_contents($akademisPath), true) : [];
        
        return view('pages.informasi.akademis', compact('curriculum', 'akademisData'));
    });

    // 2. Denah Kampus (A, B, C)
    Route::get('/denah-kampus', function () {
        $denahPath = base_path('data/denah.json');
        $denahList = file_exists($denahPath) ? json_decode(file_get_contents($denahPath), true) : [];

        return view('pages.informasi.denah-kampus', compact('denahList'));
    });

    // 3. Pengambilan Atribut
    Route::get('/atribut', function () {
        $atributPath = base_path('data/atribut.json');
        $atributData = file_exists($atributPath) ? json_decode(file_get_contents($atributPath), true) : [];

        return view('pages.informasi.atribut', compact('atributData'));
    });

});

// Route Group: Event & Kegiatan Unitas
Route::prefix('events')->group(function () {

    // 1. Index Event (Daftar Card Event)
    Route::get('/', function () {
        $eventsPath = base_path('data/events.json');
        $events = file_exists($eventsPath) ? json_decode(file_get_contents($eventsPath), true) : [];

        return view('pages.events.index', compact('events'));
    });

    // 2. Detail Event (Clean State Placeholder Default)
    Route::get('/{slug}', function ($slug) {
        $eventsPath = base_path('data/events.json');
        $events = file_exists($eventsPath) ? json_decode(file_get_contents($eventsPath), true) : [];

        $event = collect($events)->firstWhere('slug', $slug);

        if (!$event) {
            abort(404);
        }

        // Default $photos dibuat array kosong [] agar konsisten clean
        $photos = [];

        return view('pages.events.show', compact('event', 'photos'));
    });

});

// Route Group: Partisipasi & Layanan Mahasiswa
Route::prefix('kontak')->group(function () {

    // 1. Hubungi Kami
    Route::get('/', function () {
        $kontakPath = base_path('data/kontak.json');
        $kontakData = file_exists($kontakPath) ? json_decode(file_get_contents($kontakPath), true) : [];

        return view('pages.kontak.index', compact('kontakData'));
    });

    // 2. Tulis Aspirasi
    Route::get('/aspirasi', function () {
        return view('pages.kontak.aspirasi');
    });

    // 3. Tulis Artikel
    Route::get('/tulis-artikel', function () {
        return view('pages.kontak.tulis-artikel');
    });

});

// Route Group: Blog & Berita Unitas SI
Route::prefix('blog')->group(function () {

    // 1. Index Blog (Daftar Artikel + Search & Filter)
    Route::get('/', function () {
        $blogPath = base_path('data/blog.json');
        $posts = file_exists($blogPath) ? json_decode(file_get_contents($blogPath), true) : [];

        return view('pages.blog.index', compact('posts'));
    });

    // 2. Detail Artikel
    Route::get('/{slug}', function ($slug) {
        $blogPath = base_path('data/blog.json');
        $posts = file_exists($blogPath) ? json_decode(file_get_contents($blogPath), true) : [];

        $post = collect($posts)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        // Rekomendasi Artikel Lain
        $relatedPosts = collect($posts)->where('slug', '!=', $slug)->take(3)->values()->all();

        return view('pages.blog.show', compact('post', 'relatedPosts'));
    });

});

// Route: E-Voting Pilkoor (Coming Soon)
Route::get('/voting', function () {
    return view('pages.coming-soon', [
        'title' => 'E-Voting Pilkoor',
        'subtitle' => 'Pemungutan suara online transparan dan terverifikasi untuk pemilihan Koordinator Unitas SI akan segera dimulai.'
    ]);
});

// Route: Open Recruitment (Coming Soon)
Route::get('/oprec', function () {
    return view('pages.coming-soon', [
        'title' => 'Open Recruitment',
        'subtitle' => 'Pendaftaran anggota dan kepengurusan Unitas Sistem Informasi akan segera dibuka. Siapkan dirimu!'
    ]);
});

// Route: Sisformerch (Coming Soon)
Route::get('/shop', function () {
    return view('pages.coming-soon', [
        'title' => 'Sisformerch',
        'subtitle' => 'Official Merchandise resmi Unitas Sistem Informasi sedang dalam tahap persiapan katalog.'
    ]);
});