<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ProfileMadrasah;
use App\Models\Contact;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::orderByRaw('created_at DESC')->get();
        $profile_madrasah = ProfileMadrasah::first();
        return view('berita.index', compact('berita', 'profile_madrasah'));
    }

    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('berita.create',compact('profile_madrasah'));
    }

    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul   = $request->input('judul');
        $filefoto                  = $request->file('foto');
        $filefotoName   = 'FB-' . $filefoto->getClientOriginalName();
        $filefoto->move('foto_berita/', $filefotoName);
        $berita->foto  = $filefotoName;
        $berita->penulis   = $request->input('penulis');
        $berita->deskripsi   = $request->input('deskripsi');
        $berita->save();
        return redirect()->route('berita.index')->with("success", "Berita berhasil disimpan");
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        $profile_madrasah = ProfileMadrasah::first();
        return view('berita.edit', compact('berita','profile_madrasah'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findorfail($id);
        $berita->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_berita/', 'FB-' . $request->file('foto')->getClientOriginalName());
            $berita->foto = 'FB-' . $request->file('foto')->getClientOriginalName();
            $berita->save();
        }
        return redirect()->route('berita.index')->with('success', 'Edit data sukses');
    }

    public function destroy($id)
    {
        try {
            $berita = Berita::find($id);
            $berita->delete();
            return redirect()->route('berita.index')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}
