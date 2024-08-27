<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileMadrasah extends Model
{
    use HasFactory;

    protected $table = 'profile_madrasah';
    protected $fillable = ['nama', 'deskripsi', 'gambar', 'logo', 'jumlah_rombel', 'jumlah_siswa', 'jumlah_guru', 'jumlah_tendik'];
}
