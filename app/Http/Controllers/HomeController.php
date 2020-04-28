<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function login()
    {

    	return view('login');

    }

    public function register()
    {

    	return view('register');

    }

 	public function home()
    {

    	return view('app/home/index');

    }
       
}
