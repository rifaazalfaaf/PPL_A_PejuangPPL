<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengguna', 'ControllerPengguna@index');
Route::get('/produk', 'ControllerProduk@index');
Route::get('/jasa', 'ControllerJasa@index');
Route::get('/toko', 'ControllerToko@index');

Route::get('/pengguna/{id}', 'ControllerPengguna@show');
Route::get('/produk/{id}', 'ControllerProduk@show');
Route::get('/jasa/{id}', 'ControllerJasa@show');
Route::get('/toko/{id}', 'ControllerToko@show');

Route::post('/pengguna/store','ControllerPengguna@store');
Route::post('/produk/store','ControllerProduk@store');
Route::post('/jasa/store','ControllerJasa@store');
Route::post('/toko/store','ControllerToko@store');

Route::post('/pengguna/update/{id}','ControllerPengguna@update');
Route::post('/produk/update/{id}','ControllerProduk@update');
Route::post('/jasa/update/{id}','ControllerJasa@update');
Route::post('/toko/update/{id}','ControllerToko@update');

Route::post('/pengguna/delete/{id}','ControllerPengguna@destroy');
Route::post('/produk/delete/{id}','ControllerProduk@destroy');
Route::post('/jasa/delete/{id}','ControllerJasa@destroy');
Route::post('/toko/delete/{id}','ControllerToko@destroy');