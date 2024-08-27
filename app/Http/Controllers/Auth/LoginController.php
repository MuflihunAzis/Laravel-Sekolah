<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("Auth.login", [
            'routeAction' => route('auth.login.action'),
            'routeForgotPassword' => 'todo-forgot-password'
        ]);
    }

    public function action(Request $request)
    {    
        $validated = $request->validate([
            'email' => [
                'required',
                'string',
                'email'
            ],
            'password' => [
                'required',
                'string',
            ]
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();

            // Set flash message
            $request->session()->flash('success', 'Login berhasil!');

            return redirect()->route('admin.index');
        }

        return back()->with('error', 'Login Gagal! Email atau Password yang Anda masukkan Salah.');
    }
}
