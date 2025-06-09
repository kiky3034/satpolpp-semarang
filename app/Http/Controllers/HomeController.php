<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('home.home', compact('beritas'));
    }
}
