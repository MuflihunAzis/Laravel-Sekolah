<?php

namespace App\Http\Controllers;

use App\Models\GuruTendik;
use App\Models\ProfileMadrasah;
use Illuminate\Http\Request;

class GTPKController extends Controller
{
    public function index()
    {
        $gurutendik = GuruTendik::all();
        $profile_madrasah = ProfileMadrasah::first();
        return view('gtpk.index', compact('gurutendik', 'profile_madrasah'));
    }

    public function create()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('gtpk.create', compact('profile_madrasah'));
    }

    public function store(Request $request)
    {
        $gurutendik = new GuruTendik();
        $gurutendik->nama   = $request->input('nama');
        $gurutendik->jabatan   = $request->input('jabatan');
        $gurutendik->motto   = $request->input('motto');
        $gurutendik->facebook   = $request->input('facebook');
        $gurutendik->instagram   = $request->input('instagram');
        $gurutendik->twitter   = $request->input('twitter');
        $image                   = $request->file('foto');
        $imageName   = 'GTK-' . $image->getClientOriginalName();
        $image->move('foto_gurutendik/', $imageName);
        $gurutendik->foto  = $imageName;
        $gurutendik->save();
        return redirect()->route('gtpk.index')->with("success", "Tambah data suskes");
    }

    public function edit($id)
    {
        $gurutendik = GuruTendik::find($id);
        $profile_madrasah = ProfileMadrasah::first();
        return view('gtpk.edit', compact('gurutendik', 'profile_madrasah'));
    }

    public function update(Request $request, $id)
    {
        $gurutendik = GuruTendik::findorfail($id);
        $gurutendik->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_gurutendik/', 'GTK-' . $request->file('foto')->getClientOriginalName());
            $gurutendik->foto = 'GTK-' . $request->file('foto')->getClientOriginalName();
            $gurutendik->save();
        }
        return redirect()->route('gtpk.index')->with('success', 'Edit data sukses');
    }

    public function destroy($id)
    {
        try {
            $gurutendik = GuruTendik::find($id);
            $gurutendik->delete();
            return redirect()->route('gtpk.index')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}

