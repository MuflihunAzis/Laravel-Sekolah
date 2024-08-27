<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\GuruTendik;
use App\Models\InformasiPendaftaran;
use App\Models\ProfileMadrasah;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class InformasiPendaftaranController extends Controller
{
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        $informasi_pendaftaran = InformasiPendaftaran::first();
        $contact = Contact::first();
        $gurutendik = GuruTendik::all();

        return view('noLogin.pendaftaran', compact('profile_madrasah', 'informasi_pendaftaran', 'contact', 'gurutendik'));
    }

    public function download()
    {
        // Mengambil data informasi pendaftaran dari database
        $informasi_pendaftaran = InformasiPendaftaran::first();

        // Mendapatkan nama file dari kolom `formulir`
        $fileName = $informasi_pendaftaran->formulir;

        // Menggabungkan nama file dengan path direktori tempat file disimpan
        $filePath = public_path('berkas_pendaftaran/' . $fileName);

        // Memastikan file ada sebelum melakukan download
        if (file_exists($filePath)) {
            return Response::download($filePath, $fileName);
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    }

    public function admin()
    {
        $profile_madrasah = ProfileMadrasah::first();
        $informasi_pendaftaran = InformasiPendaftaran::orderByRaw('created_at DESC')->paginate(1);
        return view('pendaftaran.index', compact('informasi_pendaftaran', 'profile_madrasah'));
    }

    public function edit($id)
    {
        $informasi_pendaftaran = InformasiPendaftaran::find($id);
        $profile_madrasah = ProfileMadrasah::first();
        return view('pendaftaran.edit', compact('informasi_pendaftaran','profile_madrasah'));
    }

    public function update(Request $request, $id)
    {
        $informasi_pendaftaran = InformasiPendaftaran::findorfail($id);
        $informasi_pendaftaran->update($request->except(['gambar', 'formulir']));

        // Update gambar jika ada file baru yang diunggah
        if ($request->hasFile('gambar')) {
            $gambarName = 'GPendaf-' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('gambar_pendaftaran/', $gambarName);
            $informasi_pendaftaran->gambar = $gambarName;
        }

        // Update formulir jika ada file baru yang diunggah
        if ($request->hasFile('formulir')) {
            $formulirName = 'Formulir-' . $request->file('formulir')->getClientOriginalName();
            $request->file('formulir')->move('berkas_pendaftaran/', $formulirName);
            $informasi_pendaftaran->formulir = $formulirName;
        }

        $informasi_pendaftaran->save();

        return redirect()->route('pendaftaran.index')->with('success', 'Edit data sukses');
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $informasi_pendaftaran = new InformasiPendaftaran();
        $informasi_pendaftaran->status = $request->input('status');
        $informasi_pendaftaran->deskripsi = $request->input('deskripsi');

        // Menyimpan gambar
        if ($request->hasFile('gambar')) {
            $filegambar = $request->file('gambar');
            $filegambarName = 'GPendaf-' . $filegambar->getClientOriginalName();
            $filegambar->move('gambar_pendaftaran/', $filegambarName);
            $informasi_pendaftaran->gambar = $filegambarName;
        }

        // Menyimpan formulir
        if ($request->hasFile('formulir')) {
            $fileformulir = $request->file('formulir');
            $fileformulirName = 'Formulir-' . $fileformulir->getClientOriginalName();
            $fileformulir->move('berkas_pendaftaran/', $fileformulirName);
            $informasi_pendaftaran->formulir = $fileformulirName;
        }

        $informasi_pendaftaran->save();

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil disimpan');
    }

}
