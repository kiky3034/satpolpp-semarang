<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('berita_terbaru', compact('beritas')); // <- VIEW PUBLIK ✅
    }



    public function admin()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['judul', 'isi']);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('berita', 'public');
            $data['gambar'] = $path;
        }

        Berita::create($data);

        return redirect()->route('admin.berita')->with('success', 'Berita ditambahkan');
    }


    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['judul', 'isi']);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('berita', 'public');
            $data['gambar'] = $path;
        }

        $berita->update($data);

        return redirect()->route('admin.berita')->with('success', 'Berita diperbarui');
    }


    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('admin.berita')->with('success', 'Berita dihapus');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('detail_berita', compact('berita'));
    }

}

