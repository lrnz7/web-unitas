<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleSubmission;
use App\Models\Article;
use App\Models\Member;
use App\Models\Division;
use App\Models\Period;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    // Dashboard Overview
    public function index()
    {
        $pendingCount = ArticleSubmission::where('status', 'pending')->count();
        $approvedCount = ArticleSubmission::where('status', 'approved')->count();
        $membersCount = Member::count();

        return view('admin.dashboard', compact('pendingCount', 'approvedCount', 'membersCount'));
    }

    // -------------------------------------------------------------
    // MODUL 1: KURASI ARTIKEL MAHASISWA
    // -------------------------------------------------------------
    public function submissions()
    {
        $submissions = ArticleSubmission::latest()->get();
        return view('admin.submissions.index', compact('submissions'));
    }

    public function showSubmission($id)
    {
        $submission = ArticleSubmission::findOrFail($id);
        return view('admin.submissions.show', compact('submission'));
    }

    public function approveSubmission($id)
    {
        $submission = ArticleSubmission::findOrFail($id);

        $baseSlug = Str::slug($submission->title);
        $slug = $baseSlug;
        $count = 1;
        while (Article::where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-{$count}";
            $count++;
        }

        Article::create([
            'title'           => $submission->title,
            'slug'            => $slug,
            'excerpt'         => $submission->excerpt ?? Str::limit(strip_tags($submission->content), 120),
            'content'         => $submission->content,
            'author_name'     => $submission->author_name,
            'author_npm'      => $submission->author_npm,
            'photo_primary'   => $submission->photo_primary,
            'photo_secondary' => $submission->photo_secondary,
            'photo_extra'     => $submission->photo_extra,
        ]);

        $submission->update(['status' => 'approved']);

        return redirect()->route('admin.submissions')->with('success', 'Artikel berhasil disetujui dan terbit di Blog!');
    }

    public function rejectSubmission($id)
    {
        $submission = ArticleSubmission::findOrFail($id);
        $submission->update(['status' => 'rejected']);

        return redirect()->back()->with('success', 'Artikel ditolak.');
    }

    // -------------------------------------------------------------
    // MODUL 2: BLOG & ARTIKEL ADMIN (FULL CRUD & FIX SLUG)
    // -------------------------------------------------------------
    public function articles()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function createArticle()
    {
        return view('admin.articles.create');
    }

    public function storeArticle(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'content'       => 'required|string',
            'author_name'   => 'required|string|max:255',
            'photo_primary' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $photoPrimary = $request->file('photo_primary')->store('articles', 'public');
        $photoSecondary = $request->hasFile('photo_secondary') ? $request->file('photo_secondary')->store('articles', 'public') : null;
        $photoExtra = $request->hasFile('photo_extra') ? $request->file('photo_extra')->store('articles', 'public') : null;

        // Bikin slug bersih & unik
        $baseSlug = Str::slug($request->title);
        $slug = $baseSlug;
        $count = 1;
        while (Article::where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-{$count}";
            $count++;
        }

        Article::create([
            'title'           => $request->title,
            'slug'            => $slug,
            'excerpt'         => $request->excerpt ?? Str::limit(strip_tags($request->content), 120),
            'content'         => $request->content,
            'author_name'     => $request->author_name,
            'author_npm'      => $request->author_npm ?? 'ADMIN-UNITAS',
            'photo_primary'   => $photoPrimary,
            'photo_secondary' => $photoSecondary,
            'photo_extra'     => $photoExtra,
        ]);

        return redirect()->route('admin.articles')->with('success', 'Artikel resmi berhasil diterbitkan!');
    }

    public function editArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function updateArticle(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title'         => 'required|string|max:255',
            'content'       => 'required|string',
            'author_name'   => 'required|string|max:255',
            'photo_primary' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('photo_primary')) {
            $article->photo_primary = $request->file('photo_primary')->store('articles', 'public');
        }

        $baseSlug = Str::slug($request->title);
        $slug = $baseSlug;
        $count = 1;
        while (Article::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = "{$baseSlug}-{$count}";
            $count++;
        }

        $article->update([
            'title'       => $request->title,
            'slug'        => $slug,
            'excerpt'     => $request->excerpt ?? Str::limit(strip_tags($request->content), 120),
            'content'     => $request->content,
            'author_name' => $request->author_name,
        ]);

        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroyArticle($id)
    {
        Article::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Artikel berhasil dihapus.');
    }

    // -------------------------------------------------------------
    // MODUL 3: MANAJEMEN STRUKTURAL (FULL CRUD)
    // -------------------------------------------------------------
    public function members(Request $request)
    {
        $periods = Period::all();
        $divisions = Division::all();

        $activePeriod = Period::where('is_active', true)->first();
        $selectedPeriodId = $request->get('period_id', $activePeriod?->id ?? $periods->first()?->id);

        $members = Member::with(['period', 'division'])
            ->when($selectedPeriodId, function ($query) use ($selectedPeriodId) {
                return $query->where('period_id', $selectedPeriodId);
            })
            ->get();

        return view('admin.members.index', compact('members', 'periods', 'divisions', 'selectedPeriodId'));
    }

    public function storeMember(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:255',
            'role'            => 'required|string|max:255',
            'period_id'       => 'required|exists:periods,id',
            'division_id'     => 'required|exists:divisions,id',
            'photo_primary'   => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'photo_secondary' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $photoPrimary = $request->file('photo_primary')->store('members', 'public');
        $photoSecondary = $request->hasFile('photo_secondary') 
            ? $request->file('photo_secondary')->store('members', 'public') 
            : null;

        $tupoksiArray = $request->tupoksi 
            ? array_values(array_filter(array_map('trim', explode(',', $request->tupoksi)))) 
            : [];

        Member::create([
            'period_id'       => $request->period_id,
            'division_id'     => $request->division_id,
            'role'            => $request->role,
            'name'            => $request->name,
            'photo_primary'   => $photoPrimary,
            'photo_secondary' => $photoSecondary,
            'tupoksi'         => $tupoksiArray,
        ]);

        return redirect()->back()->with('success', 'Pengurus berhasil ditambahkan!');
    }

    public function editMember($id)
    {
        $member = Member::findOrFail($id);
        $periods = Period::all();
        $divisions = Division::all();

        return view('admin.members.edit', compact('member', 'periods', 'divisions'));
    }

    public function updateMember(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'name'            => 'required|string|max:255',
            'role'            => 'required|string|max:255',
            'period_id'       => 'required|exists:periods,id',
            'division_id'     => 'required|exists:divisions,id',
            'photo_primary'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'photo_secondary' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('photo_primary')) {
            $member->photo_primary = $request->file('photo_primary')->store('members', 'public');
        }

        if ($request->hasFile('photo_secondary')) {
            $member->photo_secondary = $request->file('photo_secondary')->store('members', 'public');
        }

        $tupoksiArray = $request->tupoksi 
            ? array_values(array_filter(array_map('trim', explode(',', $request->tupoksi)))) 
            : [];

        $member->update([
            'period_id'   => $request->period_id,
            'division_id' => $request->division_id,
            'role'        => $request->role,
            'name'        => $request->name,
            'tupoksi'     => $tupoksiArray,
        ]);

        return redirect()->route('admin.members', ['period_id' => $request->period_id])->with('success', 'Data pengurus berhasil diubah!');
    }

    public function destroyMember($id)
    {
        Member::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Pengurus berhasil dihapus.');
    }

    // -------------------------------------------------------------
    // MODUL 4: MANAJEMEN EVENT & KEGIATAN (FULL CRUD)
    // -------------------------------------------------------------
    public function events()
    {
        $eventsPath = base_path('data/events.json');
        $events = File::exists($eventsPath) ? json_decode(File::get($eventsPath), true) : [];

        return view('admin.events.index', compact('events'));
    }

    public function storeEvent(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string',
            'date'        => 'required|date',
            'date_label'  => 'required|string',
            'excerpt'     => 'required|string',
            'description' => 'required|string',
        ]);

        $eventsPath = base_path('data/events.json');
        $events = File::exists($eventsPath) ? json_decode(File::get($eventsPath), true) : [];

        $coverImage = "https://placehold.co/600x400/334EAC/FFF?text=" . urlencode($request->title);
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('events', 'public');
            $coverImage = asset('storage/' . $path);
        }

        $newEvent = [
            'id'              => count($events) ? max(array_column($events, 'id')) + 1 : 1,
            'slug'            => Str::slug($request->title),
            'title'           => $request->title,
            'category'        => $request->category,
            'date'            => $request->date,
            'date_label'      => $request->date_label,
            'cover_image'     => $coverImage,
            'excerpt'         => $request->excerpt,
            'description'     => $request->description,
            'drive_folder_id' => $request->drive_folder_id ?? '',
        ];

        array_unshift($events, $newEvent);
        File::put($eventsPath, json_encode($events, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'Event baru berhasil ditambahkan!');
    }

    public function editEvent($id)
    {
        $eventsPath = base_path('data/events.json');
        $events = File::exists($eventsPath) ? json_decode(File::get($eventsPath), true) : [];

        $event = collect($events)->firstWhere('id', $id);

        if (!$event) {
            return redirect()->route('admin.events')->with('error', 'Event tidak ditemukan!');
        }

        return view('admin.events.edit', compact('event'));
    }

    public function updateEvent(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string',
            'date'        => 'required|date',
            'date_label'  => 'required|string',
            'excerpt'     => 'required|string',
            'description' => 'required|string',
        ]);

        $eventsPath = base_path('data/events.json');
        $events = File::exists($eventsPath) ? json_decode(File::get($eventsPath), true) : [];

        foreach ($events as &$event) {
            if ($event['id'] == $id) {
                $event['title']           = $request->title;
                $event['slug']            = Str::slug($request->title);
                $event['category']        = $request->category;
                $event['date']            = $request->date;
                $event['date_label']      = $request->date_label;
                $event['excerpt']         = $request->excerpt;
                $event['description']     = $request->description;
                $event['drive_folder_id'] = $request->drive_folder_id ?? '';

                if ($request->hasFile('cover_image')) {
                    $path = $request->file('cover_image')->store('events', 'public');
                    $event['cover_image'] = asset('storage/' . $path);
                }
                break;
            }
        }

        File::put($eventsPath, json_encode($events, JSON_PRETTY_PRINT));

        return redirect()->route('admin.events')->with('success', 'Data event berhasil diperbarui!');
    }

    public function destroyEvent($id)
    {
        $eventsPath = base_path('data/events.json');
        $events = File::exists($eventsPath) ? json_decode(File::get($eventsPath), true) : [];

        $filteredEvents = array_values(array_filter($events, fn($e) => $e['id'] != $id));
        File::put($eventsPath, json_encode($filteredEvents, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'Event berhasil dihapus!');
    }
}