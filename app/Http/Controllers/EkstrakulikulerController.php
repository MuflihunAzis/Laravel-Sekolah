<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakulikuler;
use App\Models\ProfileMadrasah;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    public function index()
    {
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        $profile_madrasah = ProfileMadrasah::first();
        return view('ekstrakulikuler.index', compact('ekstrakulikuler','profile_madrasah'));
    }

    public function create()
    {   $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        $profile_madrasah = ProfileMadrasah::first();
        return view('ekstrakulikuler.create', compact('ekstrakulikuler','profile_madrasah'));


    }

    public function store(Request $request)
    {
        $ekstrakulikuler = new Ekstrakulikuler();
        $ekstrakulikuler->nama   = $request->input('nama');
        $ekstrakulikuler->deskripsi   = $request->input('deskripsi');
        $image                   = $request->file('foto');
        $imageName   = 'Eks-' . $image->getClientOriginalName();
        $image->move('foto_ekstrakulikuler/', $imageName);
        $ekstrakulikuler->foto  = $imageName;
        $ekstrakulikuler->save();
        return redirect()->route('esktrakulikuler.index')->with("success", "Tambah data suskes");
    }

    public function edit($id)
    {
        $ekstrakulikuler = Ekstrakulikuler::find();
        $profile_madrasah = ProfileMadrasah::first($id);
        return view('ekstrakulikuler.edit', compact('ekstrakulikuler','profile_madrasah'));
    }

    public function update(Request $request, $id)
    {
        $ekstrakulikuler = Ekstrakulikuler::findorfail($id);
        $ekstrakulikuler->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_ekstrakulikuler/', 'Eks-' . $request->file('foto')->getClientOriginalName());
            $ekstrakulikuler->foto = 'Eks-' . $request->file('foto')->getClientOriginalName();
            $ekstrakulikuler->save();
        }
        return redirect()->route('esktrakulikuler.index')->with('success', 'Edit data sukses');
    }

    public function destroy($id)
    {
        try {
            $ekstrakulikuler = Ekstrakulikuler::find($id);
            $ekstrakulikuler->delete();
            return redirect()->route('esktrakulikuler.index')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}
