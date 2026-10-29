<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $controller = new BukuController();
        $buku = $controller->getBuku();

        return view('home', compact('buku'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}