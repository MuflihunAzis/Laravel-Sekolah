<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GTPKController;
use App\Http\Controllers\InformasiPendaftaranController;
use App\Http\Controllers\LeandingPageController;
use App\Http\Controllers\ProfileMadrasahController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LeandingPageController::class, 'index'])->name('home.index');
Route::get('/pendaftaran', [InformasiPendaftaranController::class, 'index'])->name('informasi-pendaftaran.index');
Route::get('/unduh-berkas', [InformasiPendaftaranController::class, 'download'])->name('unduh-berkas');
Route::get('/home/berita/{id}', [LeandingPageController::class, 'show_berita']);

//admin
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'action'])->name('auth.login.action');

Route::middleware(['auth', 'user-access:Kepala Sekolah,Guru'])->group(
    function(){
        Route::get('/logout', [LogoutController::class, '__invoke'])->name('auth.logout');

        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/admin/profile-madrasah', [ProfileMadrasahController::class, 'index'])->name('profile-madrasah');
        Route::get('/admin/profile-madrasah/edit/{id}', [ProfileMadrasahController::class, 'edit'])->name('edit-profile-madrasah');
        Route::put('/admin/profile-madrasah/edit/{id}', [ProfileMadrasahController::class, 'update'])->name('update-profile-madrasah');
        Route::get('/admin/profile-madrasah/create', [ProfileMadrasahController::class, 'create'])->name('create-profile-madrasah');
        Route::post('/admin/profile-madrasah/create', [ProfileMadrasahController::class, 'store'])->name('profilemadrasah.store');

        Route::get('/admin/berita', [BeritaController::class, 'index'])->name('berita.index');
        Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/admin/berita/create', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/admin/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::get('/admin/berita/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.delete');

        Route::get('/admin/esktrakulikuler', [EkstrakulikulerController::class, 'index'])->name('esktrakulikuler.index');
        Route::get('/admin/esktrakulikuler/create', [EkstrakulikulerController::class, 'create'])->name('ekstrakulikuler.create');
        Route::post('/admin/esktrakulikuler/create', [EkstrakulikulerController::class, 'store'])->name('ekstrakulikuler.store');
        Route::get('/admin/esktrakulikuler/edit/{id}', [EkstrakulikulerController::class, 'edit'])->name('ekstrakulikuler.edit');
        Route::put('/admin/esktrakulikuler/update/{id}', [EkstrakulikulerController::class, 'update'])->name('ekstrakulikuler.update');
        Route::get('/admin/esktrakulikuler/delete/{id}', [EkstrakulikulerController::class, 'destroy'])->name('ekstrakulikuler.delete');

        Route::get('/admin/gtpk', [GTPKController::class, 'index'])->name('gtpk.index');
        Route::get('/admin/gtpk/create', [GTPKController::class, 'create'])->name('gurutendik.create');
        Route::post('/admin/gtpk/create', [GTPKController::class, 'store'])->name('gurutendik.store');
        Route::get('/admin/gtpk/edit/{id}', [GTPKController::class, 'edit'])->name('gurutendik.edit');
        Route::put('/admin/gtpk/update/{id}', [GTPKController::class, 'update'])->name('gurutendik.update');
        Route::get('/admin/gtpk/delete/{id}', [GTPKController::class, 'destroy'])->name('gurutendik.delete');

        Route::get('/admin/pendaftaran', [InformasiPendaftaranController::class, 'admin'])->name('pendaftaran.index');
        Route::get('/admin/pendaftaran/edit/{id}', [InformasiPendaftaranController::class, 'edit'])->name('pendaftaran.edit');
        Route::put('/admin/pendaftaran/update/{id}', [InformasiPendaftaranController::class, 'update'])->name('pendaftaran.update');
        Route::get('/admin/pendaftaran/create', [InformasiPendaftaranController::class, 'create'])->name('pendaftaran.create');
        Route::post('/admin/pendaftaran/create', [InformasiPendaftaranController::class, 'store'])->name('pendaftaran.store');

        Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::get('/admin/contact/create', [ContactController::class, 'create'])->name('contact.create');
        Route::post('/admin/contact/create', [ContactController::class, 'store'])->name('contact.store');
        Route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
        Route::put('/admin/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
    }
);
