<?php

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('pejuang/login', function () {
//     return views('login')
// });
// Route::get('/register', 'HomeController@register');

Route::get('/login','HomeController@login');
Route::get('/register','HomeController@register');
Route::get('/','HomeController@home')->name('home');

include("agnes.php");
include("kaka.php");
include("rifaa.php");