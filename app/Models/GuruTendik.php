<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruTendik extends Model
{
    use HasFactory;

    protected $table = 'gurutendik';
    protected $fillable = ['nama', 'jabatan', 'motto', 'foto', 'facebook', 'instagram', 'twitter'];

}
