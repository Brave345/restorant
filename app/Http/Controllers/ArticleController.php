<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'kategori' => 'required',
        'gambar' => 'required|image|max:2048',
    ]);

    // Simpan artikel ke database
    $article = new Article;
    $article->id = $request->id;
    $article->isi = $request->isi;
    $article->judul = $request->judul;
    $article->kategori = $request->kategori;
    
    
        
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarName = $gambar->getClientOriginalName(); // Mengambil nama asli file gambar
        $gambarPath = $gambar->storeAs('public', $gambarName); // Menyimpan gambar dengan nama asli
        $article->gambar = str_replace('public/', '', $gambarPath);
    }

    $article->save();

    return redirect()->route('articles.index')
        ->with('success', 'Artikel berhasil ditambahkan.');
}

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
{
    $article = Article::findOrFail($id);

    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'kategori' => 'required',
        'gambar' => 'image|max:2048',
    ]);

    $article->judul = $request->judul;
    $article->isi = $request->isi;
    $article->kategori = $request->kategori;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarName = $gambar->getClientOriginalName();
        $gambarPath = $gambar->storeAs('public', $gambarName);
        $article->gambar = str_replace('public/', '', $gambarPath);
    }

    $article->save();

    return redirect()->route('articles.index')
        ->with('success', 'Chef berhasil diperbarui.');
}

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Chef berhasil dihapus.');
    }
}
