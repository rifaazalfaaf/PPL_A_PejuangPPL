@extends('layout.default')
@section('title','Buka Toko')

@section('styles')
 
@endsection

@section('content')

<div class="container mb-3">
  <div class="row">
    <div class="col-md-3">
      <div class="card bitbit-card rounded-0 border border-light">
        <div class="nama_toko card-title mt-2 pl-3 pt-3" style="text-align: center;">
          Toko Bunga Kasih
        </div><hr>
        <div class="my-2 pl-3">
          <h5 class="nama-cs">Produk saya</h5>
          <h5 class="harga">Tambah produk baru</h5>
          <h5 class="harga">Pesan</h5>
        </div><hr>
      </div>
    </div>

    <div class="col-md-9">
      <div class="card">
        <div class="card bitbit-card rounded-0 border border-light">
          <div class="card-produk p-3">
            <div class="mb-3" align="right">
              <a href="{{url('/tambahproduk')}}"><button class="btn btn-beli">
                + Tambah Produk Baru
              </button>
              </a>
            </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                              <div class="card">
                                  <div class="container">
                                     <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px;"><br>
                                      <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                      <h5 class="harga-dihome">RP. 10.000.000</h5>
                                      <div class="row">
                                        <div class="col-md-9">
                                          <label class="alamat mt-0" for="alamat">Stok : 10</label> 
                                        </div>
                                        <div class="col-md-1">
                                          <a href=""><span class="fas fa-edit"></span></a>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                              <div class="card">
                                  <div class="container">
                                      <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%;margin-top:10px;margin-bottom: 20px;"><br>
                                      <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                      <h5 class="harga-dihome">RP. 10.000.000</h5>
                                      <div class="row">
                                        <div class="col-md-9">
                                          <label class="alamat mt-0" for="alamat">Stok : 10</label> 
                                        </div>
                                        <div class="col-md-1">
                                          <a href=""><span class="fas fa-edit"></span></a>
                                        </div>
                                      </div>
                                  </div>
                              </div> 
                        </div>
                        <div class="col-md-3 col-sm-4">
                              <div class="card">
                                  <div class="container">
                                     <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                      <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                      <h5 class="harga-dihome">RP. 10.000.000</h5>
                                      <div class="row">
                                        <div class="col-md-9">
                                          <label class="alamat mt-0" for="alamat">Stok : 10</label> 
                                        </div>
                                        <div class="col-md-1">
                                          <a href=""><span class="fas fa-edit"></span></a>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                              <div class="card">
                                  <div class="container">
                                     <img class="card-img-top" src="{{asset('img/lidahmertua.jpg')}}" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px; "><br>
                                      <span class="nama-produk">Lidah Mertua / Sansivera lidah mertua</span>
                                      <h5 class="harga-dihome">RP. 10.000.000</h5>
                                      <div class="row">
                                        <div class="col-md-9">
                                          <label class="alamat mt-0" for="alamat">Stok : 10</label> 
                                        </div>
                                        <div class="col-md-1">
                                          <a href=""><span class="fas fa-edit"></span></a>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection