<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Contact;
use App\Models\Ekstrakulikuler;
use App\Models\GuruTendik;
use App\Models\InformasiPendaftaran;
use App\Models\ProfileMadrasah;
use Illuminate\Http\Request;

class LeandingPageController extends Controller
{
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        $gurutendik = GuruTendik::all();
        $contact = Contact::first();
        $berita_terbaru = Berita::orderByRaw('created_at DESC')->paginate(6);
        $informasi_pendaftaran = InformasiPendaftaran::first();
        return view('noLogin.index', compact('profile_madrasah', 'ekstrakulikuler', 'gurutendik', 'contact', 'berita_terbaru','informasi_pendaftaran'));
    }



    public function show_berita($id)
    {
        $contact = Contact::first();
        $profile_madrasah = ProfileMadrasah::first();
        $berita = Berita::find($id);
        return view('berita.show_berita', compact('berita', 'contact', 'profile_madrasah'));
    }
}
