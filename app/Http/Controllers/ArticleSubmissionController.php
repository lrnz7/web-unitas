<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleSubmission;

class ArticleSubmissionController extends Controller
{
    public function create()
    {
        return view('pages.kontak.tulis-artikel');
    }

    public function store(Request $request)
    {
        // Validasi input + Regex NPM SI Unindra (Angkatan 2023-2026)
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_npm'  => ['required', 'regex:/^(2023|2024|2025|2026)3350\d{4}$/'],
            'title'       => 'required|string|max:255',
            'excerpt'     => 'nullable|string|max:500',
            'content'     => 'required|string',
            'photo_primary'   => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'photo_secondary' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'photo_extra'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], [
            'author_npm.regex' => 'NPM tidak valid! Pastikan kamu mahasiswa Sistem Informasi Unindra angkatan 2023-2026.',
            'photo_primary.required' => 'Foto utama wajib diunggah.',
        ]);

        // Handling Upload Gambar
        $pathPrimary = $request->file('photo_primary')->store('submissions', 'public');
        
        $pathSecondary = $request->hasFile('photo_secondary') 
            ? $request->file('photo_secondary')->store('submissions', 'public') 
            : null;

        $pathExtra = $request->hasFile('photo_extra') 
            ? $request->file('photo_extra')->store('submissions', 'public') 
            : null;

        // Simpan ke Database
        ArticleSubmission::create([
            'author_name'     => $request->author_name,
            'author_npm'      => $request->author_npm,
            'title'           => $request->title,
            'excerpt'         => $request->excerpt,
            'content'         => $request->content,
            'photo_primary'   => $pathPrimary,
            'photo_secondary' => $pathSecondary,
            'photo_extra'     => $pathExtra,
            'status'          => 'pending',
        ]);

        return redirect()->back()->with('success', 'Artikel kamu berhasil dikirim dan menunggu peninjauan admin Unitas SI!');
    }
}