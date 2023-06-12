<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $this->authorize('user');
        return view('pages.home');
        
    }
    public function kamar() {
        $this->authorize('user');
        return view('pages.kamar');
    }
}
