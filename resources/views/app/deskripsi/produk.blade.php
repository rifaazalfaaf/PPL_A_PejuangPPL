@extends('layout.default')
@section('title','Deskripsi Produk')

@section('styles')
 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card bitbit-card rounded-0 border border-light">
                    <div class="container my-3">
                        <div class="row pl-3">
                            <div class="col-md-12 mb-3">
                                <h3 class="nama-produk">Lidah Mertua / Sansiviera lidah mertua golden</h3>
                            </div>
                            <div class="col-md-5">
                                <img class="gambar-tukang rounded" src="{{asset('img/lidahmertua.jpg')}}" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <table>
                                        <tr class="border-bottom">
                                            <td class="harga">Harga</td>
                                            <td class="jumlah_harga">10.000.000</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="harga">Jumlah</td>
                                            <td class="jumlah-produk">2</td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="harga">Metode Pengiriman</td>
                                            <td> 
                                                <form action="/action_page.php">
                                                    <div class="form-check">
                                                        <label class="harga form-check-label" for="radio1">
                                                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pengiriman-langsung" checked>Pengiriman Langsung
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="harga form-check-label" for="radio2">
                                                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="ambil-di-toko">Ambil di Toko
                                                        </label>
                                                    </div>     
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-12 deskripsi_tukang">
                                    <p>
                                        Lidah mertua atau mother in law’s tongue (Sansevieria trifasciata) merupakan tanaman perennial yang berdiri tegak terlihat kokoh, dengan daun berwarna hijau gelap, pinggir daun berwarna kuning. Lidah mertua banyak ditanam di daerah perkotaan karena sangat bagus menyerap polusi atau racun berbahaya yang terkandung dalam udara. Tanaman ini termasuk tanaman indoor pembersih udara paling ampuh karena kemampuannya dalam menyerap zat-zat berbahaya sudah dibuktikan sangat efektif, terutama asap rokok.
                                    </p>
                                    <p>
                                        Ciri-ciri lidah mertua adalah bentuknya mirip ular (sehingga disebut snake plant di luar negeri – namun ada juga tanaman lain yang disebut snake plant selain lidah mertua yaitu Nassauvia serpens), tajam pada ujungnya (sehingga disebut mother-in-law’s tongue atau lidah mertua), terlihat mirip pedang (sehingga disebut Saint George’s Sword di Brazil). Di Jepang disebut tiger’s tail, di China disebut tiger’s tail orchid, di Turki disebut Pasha sword.    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bitbit-card rounded-0 border border-light">
                    <div class="my-3 pl-3">
                        <div class="card-title">
                            <h5 class="alamat_pengiriman">Dijual dan disediakan oleh</h5>
                            <h3 class="nama_toko">Toko Bunga Kasih</h3>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> 
                            <span class="nilai_rating">(10)</span> 
                        </div>
                        <div class="card-title">
                            <h5 class="alamat_pengiriman">Jakarta Utara</h5>
                        </div>
                    </div>
                </div>
                <div class="my-3 card card bitbit-card rounded-0 border border-light">
                    <div class="p-3">
                        <div class="card-title">
                            <h4 class="metode_pengiriman">Metode Pengiriman</h4>
                            <h4 class="alamat_pengiriman">Lokasi</h4>
                            <h4 class="alamat_pengiriman">Sayang, Jatinangor, Kab. Sumedang, Jawa Barat Indonesia</h4>
                        </div>
                        <hr>
                        <form class="" action="/action_page.php">
                            <div class="form-check">
                                <label class="form-check-label alamat_pengiriman" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pengiriman-langsung">JNE Standar
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label alamat_pengiriman" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="ambil-di-toko">JNE Express
                                </label>
                            </div>     
                            <div class="form-check">
                                <label class="form-check-label alamat_pengiriman" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pengiriman-langsung">JNT Standar
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label alamat_pengiriman" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="ambil-di-toko">JNT Express
                                </label>
                            </div>  
                    </div>
                </div>
                <div align="center">
                    <button type="keranjang" class="btn col-md-5 btn-keranjang">
                        Keranjang
                    </button>
                    <button type="beli" class="btn col-md-5 btn-beli">
                        Beli
                    </button></form>
                </div>

            </div>
        </div>
        <div class="card bitbit-card rounded-0 border border-light card-block my-3">
            <div class="table">
                <div class="col-md-12">
                    <h3 class="Ulasan my-3 pl-3">Ulasan (10)</h3>
                </div>
                <table class="table ppl-table ppl-table-striped ppl-table-separated">
                    <tr>
                        <td colspan="2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>    4.9 <small>dari 5</small>
                        </td>            
                    </tr>
                    <tr class="">
                        <td class="bitbit-profile-photo">
                            <img class="rounded-circle" src="{{asset('img/profileuser.png')}}" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Sangat memuaskan</span>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="bitbit-profile-photo">
                            <img class="rounded-circle" src="{{asset('img/profileuser.png')}}" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Luar biasa hasilnya bagus sekali</span>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="bitbit-profile-photo">
                            <img class="rounded-circle" src="{{asset('img/profileuser.png')}}" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Sangat memuaskan</span>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="bitbit-profile-photo">
                            <img class="rounded-circle" src="{{asset('img/profileuser.png')}}" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Luar biasa hasilnya bagus sekali</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
