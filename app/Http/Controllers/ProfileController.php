<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{    
    public function index()
    {
        return view('app/profile/profile');
    }

    public function create()
    {
        return view('app/profile/tambah_data_diri');
    }
    
}
