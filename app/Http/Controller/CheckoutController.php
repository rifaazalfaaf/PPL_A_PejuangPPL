<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{    
    public function keranjang()
    {
        return view('app/checkout/keranjang');
    }
	public function checkout()
    {
        return view('app/checkout/checkout');
    }
    
}
