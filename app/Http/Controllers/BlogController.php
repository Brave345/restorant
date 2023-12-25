<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
        'user' => 'required',
        'judul' => 'required',
        'tanggal' => 'required',
        'tema_cooking' => 'required',
        'isi' => 'required',
        'gambar' => 'required|image|max:2048',
    ]);

    // Simpan artikel ke database
    $blog = new Blog;
    $blog->user = $request->user;
    $blog->isi = $request->isi;
    $blog->judul = $request->judul;
    $blog->tanggal = $request->tanggal;
    $blog->tema_cooking = $request->tema_cooking;
    
    
        
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarName = $gambar->getClientOriginalName(); // Mengambil nama asli file gambar
        $gambarPath = $gambar->storeAs('public', $gambarName); // Menyimpan gambar dengan nama asli
        $blog->gambar = str_replace('public/', '', $gambarPath);
    }

    $blog->save();

    return redirect()->route('blogs.index')
        ->with('success', 'Blog berhasil ditambahkan.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'tema_cooking' => 'required',
        'gambar' => 'image|max:2048',
    ]);

    $blog->judul = $request->judul;
    $blog->isi = $request->isi;
    $blog->tema_cooking = $request->tema_cooking;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarName = $gambar->getClientOriginalName();
        $gambarPath = $gambar->storeAs('public', $gambarName);
        $blog->gambar = str_replace('public/', '', $gambarPath);
    }

    $blog->save();

    return redirect()->route('blogs.index')
        ->with('success', 'Chef berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/blogs')->with('success', 'Blog berhasil dihapus.');
    }
}
