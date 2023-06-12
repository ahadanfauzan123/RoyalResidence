<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('auth.login');
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->role_id === 1) {
                return redirect()->intended('/dashboard/admin');
            }
            else if(auth()->user()->role_id === 2) {
                return redirect()->intended('/dashboard/resepsionis');
            }
            return redirect()->intended('/');
            
        }
        return back()->with('login_gagal', 'pastikan email dan password anda sesuai');
    }
    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('logout_sukses', 'berhasil logout, login untuk masuk kembali');
    }
}
