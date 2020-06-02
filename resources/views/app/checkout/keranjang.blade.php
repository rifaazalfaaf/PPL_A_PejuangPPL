@extends('layout.default')
@section('title','Keranjang')

@section('styles')
<style>
    .harga_keranjang{
        font-family: Poppins;
        font-size: 20px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #456c0a;
    }   
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class=" card bitbit-card rounded-0 border border-light mb-3">
                    <form action="/action_page.php">
                        <div class="custom-control custom-checkbox my-3 pl-5">
                            <input type="checkbox" class="custom-control-input " id="customCheck" name="example1">
                            <label class="custom-control-label harga" for="customCheck">Pilih semua produk</label>
                        </div><hr>
                        <div>
                            <div class="custom-control custom-checkbox my-3 pl-5">
                                <input type="checkbox" class="custom-control-input " id="customCheck" name="example1">
                                <label class="custom-control-label harga_keranjang" for="customCheck">Toko Bunga Kasih</label>
                            </div>
                            <div class="row pl-5">
                                <div class="col-md-2">
                                    <img src="{{asset('img/lidahmertua.jpg')}}" style="width: 100px;height: 100px;" alt="" />
                                </div>
                                <div class="col-md-10">
                                    <h5 class="harga">Lidah Mertua / Sansiviera lidah mertua golden</h5>
                                    <h5 class="harga_keranjang">Rp.10.000.000</h5>
                                    <div class="form-group pr-3">
                                        <input type="number" class="form-control" id="deskripsi_produk" required="required" name="deskripsi_produk" value="1">
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="custom-control custom-checkbox my-3 pl-5">
                                <input type="checkbox" class="custom-control-input " id="customCheck" name="example1">
                                <label class="custom-control-label harga_keranjang" for="customCheck">Toko Bunga Kasih</label>
                            </div>
                            <div class="row pl-5">
                                <div class="col-md-2">
                                    <img src="{{asset('img/lidahmertua.jpg')}}" style="width: 100px;height: 100px;" alt="" />
                                </div>
                                <div class="col-md-10">
                                    <h5 class="harga">Lidah Mertua / Sansiviera lidah mertua golden</h5>
                                    <h5 class="harga_keranjang">Rp.20.000.000</h5>
                                    <div class="form-group pr-3">
                                        <input type="number" class="form-control" id="deskripsi_produk" required="required" name="deskripsi_produk" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card  bitbit-card rounded-0 border border-light">
                    <div class="card-title pl-3 mt-3">
                        <h3 class="nama_produk">Ringkasan Belanja</h3>
                    </div>
                    <table class=" mb-3">
                        <tr>
                            <td class="pl-3 harga" width="220px">Total Harga</td>
                            <td class="harga">Rp.10.000.000</td>
                        </tr>
                    </table>
                </div>
                <a href="{{url('/checkout')}}"><button class="btn btn-beli mt-3">
                    Bayar Sekarang
                </button></a>
            </div>
        </div>
    </div>
@endsection
