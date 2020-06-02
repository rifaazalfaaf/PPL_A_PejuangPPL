@extends('layout.default')
@section('title','Home')

@section('styles')

@endsection

@section('content')
    <div class="container pppl-home" id="myDIV"> 
        <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="card" style="position: fixed;">
                <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                    <span class="pppl-sidebar-title mb-3" style="size: 20px;">
                       <b> Kategori Produk </b><br>
                    </span>
                    <span>Biji (Benih)</span><br>
                    <span>Tanaman Hias Gantung</span><br>
                    <span>Tanaman Hias Buah</span><br>
                    <span>Tanaman Hias Bunga</span><br>
                    <span>Tanaman Hias Air</span><br>
                    <span>Pupuk</span><br>
                    <span>Media Tanam</span><br>
                    <span>Pembasmi Hama</span><br>
                    <span class="mb-5">Perlengkapan Berkebun</span><br><br>
                    
                    <span class="pppl-sidebar-title mb-3" style="size: 20px">
                    <b>Kategori Jasa</b> <br>
                    </span>
                    <span>Tukang Kebun</span><br>
                    <span>Arsitektur Taman</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-9 col-sm-9">
            <div class="jumbotron bitbit-jumbotron rounded-0" style="background-image: url(img/jumbotron.png);">
                <div class="background-jumbotron">
                    <h1 class="title-jumbotron" style="text-align: center;">Temukan Tanaman Hias di BitBit !</h1>
                </div>
            </div>
{{-- Bagian Produk --}}
            <div>
                <h2 class="pppl-home-title">Produk Pilihan Terbaik</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/produk')}}">
                            <div class="card">
                                <div class="container">
                                   <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px;"><br>
                                    <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                    <h5 class="harga-dihome">RP. 10.000.000</h5>
                                    <label class="alamat mt-0" for="alamat">Jakarta Utara</label>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/produk')}}">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%;margin-top:10px;margin-bottom: 20px;"><br>
                                    <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                    <h5 class="harga-dihome">RP. 10.000.000</h5>
                                    <label class="alamat mt-0" for="alamat">Jakarta Utara</label>
                                     <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/produk')}}">
                            <div class="card">
                                <div class="container">
                                   <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                    <h5 class="harga-dihome">RP. 10.000.000</h5>
                                    <label class="alamat mt-0" for="alamat">Jakarta Utara</label>
                                     <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
{{-- Bagian tukang kebun --}}
            <div>
                <h2 class="pppl-home-title">Tukang Kebun Terbaik</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/tukang')}}">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/tukangkebun.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Sukiman Rivero</span><br>
                                    <label class="alamat" for="alamat">Depok</label>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div> 
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="card">
                            <a href="{{url('/tukang')}}">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/tukangkebun.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Sukiman Rivero</span><br>
                                    <label class="alamat" for="alamat">Depok</label>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/tukang')}}">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/tukangkebun.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Sukiman Rivero</span><br>
                                    <label class="alamat" for="alamat">Depok</label>
                                     <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
{{-- bagian arsitektur --}}
            <div>
                <h2 class="pppl-home-title">Arsitektur Taman Terbaik</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/arsitektur')}}">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/tukangkebun.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Sukiman Rivero</span><br>
                                    <label class="alamat" for="alamat">Depok</label>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>(10)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/arsitektur')}}">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/tukangkebun.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Sukiman Rivero</span><br>
                                    <label class="alamat" for="alamat">Depok</label>
                                     <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="{{url('/arsitektur')}}">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="{{asset('img/tukangkebun.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                    <span class="nama-produk">Sukiman Rivero</span><br>
                                    <label class="alamat" for="alamat">Depok</label>
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span> (10)
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
{{-- bagian artikel --}}
            <div>
                <h2 class="pppl-home-title">Artikel Terbaik untuk Tanaman anda</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a href="{{url('/artikel')}}"><div class="card">
                            <div class="container">
                                <img class="card-img-top" src="{{asset('img/artikel.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                <label class="deskripsi" for="deskripsi">8 Cara Merawat Tanaman Efektif supaya Nggak Cepat Layu</label>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="{{url('/artikel')}}"><div class="card">
                            <div class="container">
                                <img class="card-img-top" src="{{asset('img/artikel.png')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                <label class="deskripsi" for="deskripsi">8 Cara Merawat Tanaman Efektif supaya Nggak Cepat Layu</label>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        </div> 
    </div>
@endsection

@section('scripts')
<script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myDIV *").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
@endsection
