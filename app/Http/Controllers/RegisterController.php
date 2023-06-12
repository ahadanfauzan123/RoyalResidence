<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }
    public function storeUser(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:40'
        ]);
        $validated["password"] = Hash::make($validated["password"]);
        User::create($validated);
        return redirect('/login')->with('register_sukses', 'berhasil melakukan registrasi, silahkan masuk..');
    }
}
