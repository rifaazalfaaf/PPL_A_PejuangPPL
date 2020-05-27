<?php
	
	Route::get('/produk','HomeController@produk');
	Route::get('/arsitektur','HomeController@arsitektur');
	Route::get('/tukang','HomeController@tukang');
	Route::get('/keranjang','CheckoutController@keranjang');
	Route::get('/checkout','CheckoutController@checkout');
	Route::get('/pemberitahuan','PemberitahuanController@pemberitahuan');
	Route::get('/artikel','ArtikelController@artikel');
	Route::get('/profile','ProfileController@index');
	Route::get('/tambah_data_diri','ProfileController@create');


?>