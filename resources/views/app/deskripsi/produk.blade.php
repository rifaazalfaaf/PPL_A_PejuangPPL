@extends('layout.default')
@section('title','Deskripsi Produk')

@section('styles')
 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12">
                    <h3>Sukiman Rivero</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('public/img/tukangkebun.png')}}" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <tr>
                                <td>Harga</td>
                                <td>10.000.000</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Metode Pengiriman</td>
                                <td> 
                                    <form action="/action_page.php">
                                        <div class="form-check">
                                            <label class="form-check-label" for="radio1">
                                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pengiriman-langsung" checked>Pengiriman Langsung
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="radio2">
                                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="ambil-di-toko">Ambil di Toko
                                            </label>
                                        </div>     
                                    </form>
                                </td>
                            </tr>
                        </div>
                        <div class="col-md-12">
                            <p>
                                Lidah mertua atau mother in law;s tongue. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card card-title">
                        <h5><small>Dijual dan disediakan oleh</small></h5>
                        <h3>Toko Bunga Kasih</h3>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>(30)
                    </div>
                    <div class="card card-title">
                        <h5><small>Jakarta Utara</small></h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card card-title">
                        <h4>Metode Pengiriman</h4>
                        <h4>Lokasi</h4>
                        <h4>Sayang, Jatinangor, Kab. Sumedang, Jawa Barat Indonesia</h4>
                    </div>
                    <hr>
                    <form action="/action_page.php">
                        <div class="form-check">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pengiriman-langsung">JNE Standar
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="ambil-di-toko">JNE Express
                            </label>
                        </div>     
                        <div class="form-check">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="pengiriman-langsung">JNT Standar
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="ambil-di-toko">JNT Express
                            </label>
                        </div>  
                    </form>
                </div>
                <div align="center">
                    <button class="col-md-5">
                        Keranjang
                    </button>
                    <button class="col-md-5">
                        Beli
                    </button>
                </div>
            </div>
        </div>
        <div class="card-block">
            <div class="table">
                <div class="col-md-12">
                    <h3>Ulasan (30)</h3>
                </div>
                <div class="rating col-md-12">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>(30)
                </div>
                <table class="table ppl-table ppl-table-striped ppl-table-separated">
                    <tr class="">
                        <td class="kz-profile-photo">
                            <img src="{{url('public/img/tukangkebun.png')}}/img/photo-220-1.jpg" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Sangat memuaskan</span>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="kz-profile-photo">
                            <img src="{{url('public/img/tukangkebun.png')}}/img/photo-220-1.jpg" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Luar biasa hasilnya bagus sekali</span>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="kz-profile-photo">
                            <img src="{{url('public/img/tukangkebun.png')}}/img/photo-220-1.jpg" alt="" />
                        </td>
                        <td>
                            <h5>Rifaa Zalfaa<i class="kz-text-gold"></i></h5>
                            <span>Sangat memuaskan</span>
                        </td>
                    </tr>
                    <tr class="">
                        <td class="kz-profile-photo">
                            <img src="{{url('public/img/tukangkebun.png')}}/img/photo-220-1.jpg" alt="" />
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
