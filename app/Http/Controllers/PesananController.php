<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    //
    public function store(Request $request) {
        $validated = $request->validate([
            'user_id' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'jumlahkamar' => 'required',
            'name' => 'required',
            'email' => 'required',
            'notlp' => 'required',
            'visitorname' => 'required',
            'type' => 'required',
        ]);
        Pesanan::create($validated);
        return back()->with('berhasil', 'berhasil melakukan pemesanan');
    }
}
