@extends('layout.default')
@section('title','Keranjang')

@section('styles')
<style>
    .gambar-produk{
        width: 100px;
        height: 100px;
    }
 </style>
@endsection

@section('content')
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-8">
               {{-- untuk checkout bagian produk --}}
                <div class="card bitbit-card rounded-0 border border-light">
                    <div class="container my-3 pl-4">
                        <div>
                            <div class="Checkout mb-2">Checkout</div>
                            <div class="alamat_pengiriman ">Alamat Pengiriman<hr></div>
                        </div>
                        <div class="card-boddy">
                            <div class="nama-cs">
                               Agnes Hata
                            </div>
                              <div class="no_hp">
                               087780133076
                            </div>
                            <div class="alamat_pengiriman mb-3">
                               Jalan Kolonel Ahmad Syam no 27B 
                               Kost Puri Cendana Desa Cikeruh Kecamatan Jatinangor
                            </div>
                            <div class="memilih_alamat" align="center">
                               <span class="button_alamat">Pilih alamat lain</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 card bitbit-card rounded-0 border border-light">
                    <div class="container my-3 pl-4">
                        <div>
                            <div class="nama_toko">Toko Bunga Kasih</div>
                            <div class="harga mt-1">Jakarta Utara<hr></div>
                        </div>
                        <div class="card-boddy">
                            <div class="row">
                               <div class="col-md-2">
                                   <img class="gambar-produk" src="{{asset('img/lidahmertua.jpg')}}" alt="">
                               </div>
                               <div class="col-md-10">
                                    <table>
                                        <div class="nama_produk">
                                            Lidah Mertua/Sansiviera lidah mertua golden
                                        </div>
                                        <div class="jumlah_harga">
                                            Rp. 10.000.000
                                        </div>
                                        <div class="metode_pengiriman">
                                            Pengiriman langsung : JNE Standar
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- batas untuk ptoduk --}}
               {{-- untuk checkout bagian jasa --}}
               {{--  <div class="card bitbit-card rounded-0 border border-light">
                    <div class="container my-3 pl-4">
                        <div>
                            <div class="Checkout mb-2">Checkout</div>
                            <div class="alamat_pengiriman ">Depok Jawa Barat<hr></div>
                        </div>
                        <div class="card-boddy">
                            <div class="row">
                               <div class="col-md-2">
                                   <img class="gambar-produk" src="{{asset('img/tukangkebun.png')}}" alt="">
                               </div>
                               <div class="col-md-10">
                                    <table>
                                        <div class="harga">
                                            Sukiman Rivero
                                        </div>
                                        <div class="jumlah_harga">
                                            Rp. 12.000.000
                                        </div>
                                        <div class="deskripsi_jasa">
                                            Jasa Arsitektur Taman. Desain akan dikirim melalui laman chat dengan kualitas terbaik
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- batas untuk jasa --}}
            </div>

            <div class="col-md-4">
                <div class="card bitbit-card rounded-0 border border-light">
                    <div class="my-3">
                        <div class="card-title">
                            <h3 class="container alamat_deskripsi">Rincian Pembayaran</h3>
                        </div>
                        <div class="container">
                            <table>
                                <tr>
                                    <td class="harga" style="width: 200px">Total Belanja</td>
                                    <td class="harga">Rp.10.000.000</td>
                                </tr>
                                <tr>
                                    <td class="harga">Biaya Pengiriman</td>
                                    <td class="harga">Rp.10,000</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="harga">Voucher & Promo</td>
                                    <td class="harga">-</td>
                                </tr>
                                <tr>
                                    <td class="harga" >Total Pembayaran</td>
                                    <td class="harga">Rp. 10.010.000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-3 card bitbit-card rounded-0 border border-light">
                    <div class="my-3">
                        <div class="card-title">
                            <h3 class="container alamat_deskripsi">Metode Pembayaran</h3>
                        </div>
                        <div class="container">
                            <table>
                                <tr>
                                    <td class="harga" style="width: 100px;">Total</td>
                                    <td class="jumlah_harga">Rp.10.010.000</td>
                                </tr>
                            </table>
                            <form action="/action_page.php">
                                <div class="form-check">
                                    <label class="form-check-label alamat_pengiriman" for="radio1">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Ovo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label alamat_pengiriman" for="radio2">
                                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Alfamart
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label alamat_pengiriman">
                                        <input type="radio" class="form-check-input" disabled>Indomaret
                                    </label>
                                </div>
                                
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-beli col-md-12 mt-3">Bayar Sekarang</button>
                            </form>
            </div>
        </div>
    </div>
@endsection
