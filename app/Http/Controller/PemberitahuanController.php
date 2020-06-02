<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemberitahuanController extends Controller
{    
    public function pemberitahuan()
    {
        return view('app/pemberitahuan/notif');
    }
    public function checkout()
    {
        return view('app/checkout/checkout');
    }
    
}
