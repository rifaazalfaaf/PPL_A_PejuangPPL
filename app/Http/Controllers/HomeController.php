<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function index()
    {
        return view('app/home/index');
    }

    public function produk()
    {
        return view('app/deskripsi/produk');
    }

    public function arsitektur()
    {
        return view('app/deskripsi/arsitektur');
    }

    public function tukang()
    {
        return view('app/deskripsi/kebun_taman');
    }
}
