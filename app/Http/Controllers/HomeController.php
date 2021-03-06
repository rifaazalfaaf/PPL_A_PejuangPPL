<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        $nama_produk = DB::table('produk')->get();
        
        return view('app/deskripsi/produk',['produk'=>$nama_produk]);
    }

    public function arsitektur()
    {
        return view('app/deskripsi/arsitektur');
    }

    public function tukang()
    {
        return view('app/deskripsi/kebun_taman');
    }

    public function jasa()
    {
        return view('app/jasa/toko');
    }
    
    public function tambah()
    {
        return view('app/jasa/tambahjasa');
    }

    public function toko_produk()
    {
        return view('app/produk/buka_toko');
    }
    
    public function tambahproduk()
    {
        return view('app/produk/tambahproduk');
    }

}
