<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{    
    public function artikel()
    {
        return view('app/artikel/penjelasan_artikel');
    }
    
}
