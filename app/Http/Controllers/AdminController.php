<?php

namespace App\Http\Controllers;

use App\Models\ProfileMadrasah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $profile_madrasah = ProfileMadrasah::first();

        return view('userLogin.home', compact('profile_madrasah'));
    }
}
