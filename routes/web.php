<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Period;
use App\Models\Division;
use App\Models\Member;
use App\Models\Information;
use App\Http\Controllers\ArticleSubmissionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// -------------------------------------------------------------
// HOMEPAGE (Dengan Info Corner Random dari Database)
// -------------------------------------------------------------
Route::get('/', function () {
    $infoCorner = Information::where('is_active', true)->inRandomOrder()->take(2)->get();
    return view('welcome', compact('infoCorner'));
});

// -------------------------------------------------------------
// ROUTE AUTHENTICATION (Login & Logout)
// -------------------------------------------------------------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// -------------------------------------------------------------
// HALAMAN ABOUT (Prodi, Unitas & Struktural)
// -------------------------------------------------------------
Route::get('/about/prodi', function () {
    $curriculumPath = base_path('data/kurikulum.json');
    $curriculum = file_exists($curriculumPath) ? json_decode(file_get_contents($curriculumPath), true) : [];
    
    return view('pages.prodi', compact('curriculum'));
});

Route::get('/about/unitas', function () {
    return view('pages.unitas');
});

Route::get('/about/struktural', function () {
    $periods = Period::all();
    $allPeriodData = [];

    foreach ($periods as $p) {
        $slug = $p->slug;
        $periodData = ['divisions' => [], 'members' => []];

        if ($slug === '2024-2025' && Storage::exists("structure/2024-2025.json")) {
            $periodData = json_decode(Storage::get("structure/2024-2025.json"), true);
        } else {
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
                        'photo_primary' => Str::startsWith($m->photo_primary, 'images/') ? asset($m->photo_primary) : asset('storage/' . $m->photo_primary),
                        'photo_secondary' => $m->photo_secondary ? (Str::startsWith($m->photo_secondary, 'images/') ? asset($m->photo_secondary) : asset('storage/' . $m->photo_secondary)) : null,
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

// -------------------------------------------------------------
// ROUTE GROUP: INFORMASI MAHASISWA (Satu Pintu Akademis)
// -------------------------------------------------------------
Route::prefix('informasi')->group(function () {

    // Pusat Informasi Akademis (DB MySQL + JSON Kurikulum Modul)
    Route::get('/akademis', function () {
        $curriculumPath = base_path('data/kurikulum.json');
        $curriculum = file_exists($curriculumPath) ? json_decode(file_get_contents($curriculumPath), true) : [];

        // Tarik semua data informasi yang aktif dari Database MySQL
        $informasi = Information::where('is_active', true)->latest()->get();
        
        return view('pages.informasi.akademis', compact('curriculum', 'informasi'));
    });

    Route::get('/denah-kampus', function () {
        $denahPath = base_path('data/denah.json');
        $denahList = file_exists($denahPath) ? json_decode(file_get_contents($denahPath), true) : [];

        return view('pages.informasi.denah-kampus', compact('denahList'));
    });

    Route::get('/atribut', function () {
        $atributPath = base_path('data/atribut.json');
        $atributData = file_exists($atributPath) ? json_decode(file_get_contents($atributPath), true) : [];

        return view('pages.informasi.atribut', compact('atributData'));
    });

});

// -------------------------------------------------------------
// ROUTE GROUP: EVENT & KEGIATAN UNITAS
// -------------------------------------------------------------
Route::prefix('events')->group(function () {

    Route::get('/', function () {
        $eventsPath = base_path('data/events.json');
        $events = file_exists($eventsPath) ? json_decode(file_get_contents($eventsPath), true) : [];

        return view('pages.events.index', compact('events'));
    });

    Route::get('/{slug}', function ($slug) {
        $eventsPath = base_path('data/events.json');
        $events = file_exists($eventsPath) ? json_decode(file_get_contents($eventsPath), true) : [];

        $event = collect($events)->firstWhere('slug', $slug);

        if (!$event) {
            abort(404);
        }

        $photos = [];

        return view('pages.events.show', compact('event', 'photos'));
    });

});

// -------------------------------------------------------------
// ROUTE GROUP: PARTISIPASI & LAYANAN MAHASISWA
// -------------------------------------------------------------
Route::prefix('kontak')->group(function () {

    Route::get('/', function () {
        $kontakPath = base_path('data/kontak.json');
        $kontakData = file_exists($kontakPath) ? json_decode(file_get_contents($kontakPath), true) : [];

        return view('pages.kontak.index', compact('kontakData'));
    });

    Route::get('/aspirasi', function () {
        return view('pages.kontak.aspirasi');
    });

    Route::get('/tulis-artikel', [ArticleSubmissionController::class, 'create'])->name('artikel.create');
    Route::post('/tulis-artikel', [ArticleSubmissionController::class, 'store'])->name('artikel.store');

});

// -------------------------------------------------------------
// ROUTE GROUP: BLOG & BERITA UNITAS SI
// -------------------------------------------------------------
Route::prefix('blog')->group(function () {

    Route::get('/', function () {
        $dbArticles = \App\Models\Article::latest()->get()->map(function ($item) {
            $wordCount = str_word_count(strip_tags($item->content));
            $readTime = max(1, ceil($wordCount / 200)) . ' min read';

            return [
                'id'          => 'db-' . $item->id,
                'slug'        => $item->slug,
                'title'       => $item->title,
                'category'    => 'Mahasiswa',
                'author'      => $item->author_name,
                'date_label'  => $item->created_at->format('d M Y'),
                'read_time'   => $readTime,
                'thumbnail'   => Str::startsWith($item->photo_primary, 'images/') ? asset($item->photo_primary) : asset('storage/' . $item->photo_primary),
                'excerpt'     => $item->excerpt,
                'content'     => $item->content,
            ];
        });

        $blogPath = base_path('data/blog.json');
        $jsonArticles = file_exists($blogPath) ? json_decode(file_get_contents($blogPath), true) : [];

        $posts = collect($dbArticles)->concat($jsonArticles);

        return view('pages.blog.index', compact('posts'));
    });

    Route::get('/{slug}', function ($slug) {
        $dbPost = \App\Models\Article::where('slug', $slug)->first();

        if ($dbPost) {
            $wordCount = str_word_count(strip_tags($dbPost->content));
            $readTime = max(1, ceil($wordCount / 200)) . ' min read';

            $post = [
                'title'       => $dbPost->title,
                'category'    => 'Mahasiswa',
                'author'      => $dbPost->author_name,
                'date_label'  => $dbPost->created_at->format('d M Y'),
                'read_time'   => $readTime,
                'thumbnail'   => Str::startsWith($dbPost->photo_primary, 'images/') ? asset($dbPost->photo_primary) : asset('storage/' . $dbPost->photo_primary),
                'content'     => $dbPost->content,
            ];

            $relatedPosts = \App\Models\Article::where('slug', '!=', $slug)->take(3)->get()->map(function($r) {
                return [
                    'title'     => $r->title,
                    'slug'      => $r->slug,
                    'thumbnail' => Str::startsWith($r->photo_primary, 'images/') ? asset($r->photo_primary) : asset('storage/' . $r->photo_primary),
                    'excerpt'   => $r->excerpt
                ];
            });

            return view('pages.blog.show', compact('post', 'relatedPosts'));
        }

        $blogPath = base_path('data/blog.json');
        $posts = file_exists($blogPath) ? json_decode(file_get_contents($blogPath), true) : [];
        $post = collect($posts)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        $relatedPosts = collect($posts)->where('slug', '!=', $slug)->take(3)->values()->all();

        return view('pages.blog.show', compact('post', 'relatedPosts'));
    });

});

// -------------------------------------------------------------
// ROUTE GROUP: PANEL ADMIN UNITAS SI (Protected Auth)
// -------------------------------------------------------------
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Kurasi Artikel Request Mahasiswa
    Route::get('/submissions', [AdminController::class, 'submissions'])->name('admin.submissions');
    Route::get('/submissions/{id}', [AdminController::class, 'showSubmission'])->name('admin.submissions.show');
    Route::post('/submissions/{id}/approve', [AdminController::class, 'approveSubmission'])->name('admin.submissions.approve');
    Route::post('/submissions/{id}/reject', [AdminController::class, 'rejectSubmission'])->name('admin.submissions.reject');

    // Artikel Mandiri Admin (CRUD FULL)
    Route::get('/articles', [AdminController::class, 'articles'])->name('admin.articles');
    Route::get('/articles/create', [AdminController::class, 'createArticle'])->name('admin.articles.create');
    Route::post('/articles', [AdminController::class, 'storeArticle'])->name('admin.articles.store');
    Route::get('/articles/{id}/edit', [AdminController::class, 'editArticle'])->name('admin.articles.edit');
    Route::put('/articles/{id}', [AdminController::class, 'updateArticle'])->name('admin.articles.update');
    Route::delete('/articles/{id}', [AdminController::class, 'destroyArticle'])->name('admin.articles.destroy');

    // Kelola Pengurus Struktural (CRUD FULL)
    Route::get('/members', [AdminController::class, 'members'])->name('admin.members');
    Route::post('/members', [AdminController::class, 'storeMember'])->name('admin.members.store');
    Route::get('/members/{id}/edit', [AdminController::class, 'editMember'])->name('admin.members.edit');
    Route::put('/members/{id}', [AdminController::class, 'updateMember'])->name('admin.members.update');
    Route::delete('/members/{id}', [AdminController::class, 'destroyMember'])->name('admin.members.destroy');

    // Kelola Event & Kegiatan (CRUD FULL)
    Route::get('/events', [AdminController::class, 'events'])->name('admin.events');
    Route::post('/events', [AdminController::class, 'storeEvent'])->name('admin.events.store');
    Route::get('/events/{id}/edit', [AdminController::class, 'editEvent'])->name('admin.events.edit');
    Route::put('/events/{id}', [AdminController::class, 'updateEvent'])->name('admin.events.update');
    Route::delete('/events/{id}', [AdminController::class, 'destroyEvent'])->name('admin.events.destroy');

    // Kelola Informasi Akademis & Ensiklopedi (CRUD FULL)
    Route::get('/informasi', [AdminController::class, 'informasi'])->name('admin.informasi');
    Route::post('/informasi', [AdminController::class, 'storeInformasi'])->name('admin.informasi.store');
    Route::get('/informasi/{id}/edit', [AdminController::class, 'editInformasi'])->name('admin.informasi.edit');
    Route::put('/informasi/{id}', [AdminController::class, 'updateInformasi'])->name('admin.informasi.update');
    Route::delete('/informasi/{id}', [AdminController::class, 'destroyInformasi'])->name('admin.informasi.destroy');

    // Kelola Upload Modul Perkuliahan .ZIP Per Semester
    Route::get('/modul', [AdminController::class, 'modul'])->name('admin.modul');
    Route::post('/modul/{semester}/upload', [AdminController::class, 'uploadModul'])->name('admin.modul.upload');
    Route::delete('/modul/{semester}/delete', [AdminController::class, 'deleteModul'])->name('admin.modul.delete');
});

// -------------------------------------------------------------
// ROUTE LAINNYA (Coming Soon)
// -------------------------------------------------------------
Route::get('/voting', function () {
    return view('pages.coming-soon', [
        'title' => 'E-Voting Pilkoor',
        'subtitle' => 'Pemungutan suara online transparan dan terverifikasi untuk pemilihan Koordinator Unitas SI akan segera dimulai.'
    ]);
});

Route::get('/oprec', function () {
    return view('pages.coming-soon', [
        'title' => 'Open Recruitment',
        'subtitle' => 'Pendaftaran anggota dan kepengurusan Unitas Sistem Informasi akan segera dibuka. Siapkan dirimu!'
    ]);
});

Route::get('/shop', function () {
    return view('pages.coming-soon', [
        'title' => 'Sisformerch',
        'subtitle' => 'Official Merchandise resmi Unitas Sistem Informasi sedang dalam tahap persiapan katalog.'
    ]);
});