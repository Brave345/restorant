<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

public function store(Request $request)
{
    $request->validate([
        'interior' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'food' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'event' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'vip' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $interiorPath = null;
    $foodPath = null;
    $eventPath = null;
    $vipPath = null;

    if ($request->hasFile('interior')) {
        $interiorFile = $request->file('interior');
        $interiorPath = $interiorFile->storeAs('', $interiorFile->getClientOriginalName(), 'public');
    } else {
        return redirect()->back()->withErrors(['interior' => 'File gambar interior harus diunggah.']);
    }

    if ($request->hasFile('food')) {
        $foodFile = $request->file('food');
        $foodPath = $foodFile->storeAs('', $foodFile->getClientOriginalName(), 'public');
    } else {
        return redirect()->back()->withErrors(['food' => 'File gambar makanan harus diunggah.']);
    }

    if ($request->hasFile('event')) {
        $eventFile = $request->file('event');
        $eventPath = $eventFile->storeAs('', $eventFile->getClientOriginalName(), 'public');
    } else {
        return redirect()->back()->withErrors(['event' => 'File gambar acara harus diunggah.']);
    }

    if ($request->hasFile('vip')) {
        $vipFile = $request->file('vip');
        $vipPath = $vipFile->storeAs('', $vipFile->getClientOriginalName(), 'public');
    } else {
        return redirect()->back()->withErrors(['vip' => 'File gambar VIP harus diunggah.']);
    }

    $gallery = new Gallery();
    $gallery->interior = $interiorPath;
    $gallery->food = $foodPath;
    $gallery->event = $eventPath;
    $gallery->vip = $vipPath;
    $gallery->save();

    return redirect()->route('galleries.index')->with('success', 'Gambar berhasil ditambahkan.');
}
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleries = Gallery::findOrFail($id);
        $galleries->delete();

        return redirect('/galleries')->with('success', 'Blog berhasil dihapus.');
        
    }
}
