<?php
	
	Route::get('/produk','HomeController@produk');
	Route::get('/arsitektur','HomeController@arsitektur');
	Route::get('/tukang','HomeController@tukang');
	Route::get('/keranjang','CheckoutController@keranjang');
	Route::get('/checkout','CheckoutController@checkout');


?>