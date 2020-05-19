@extends('layout.default')
@section('title','Keranjang')

@section('styles')
<style>
    .Checkout {
        font-family: Lato;
        font-size: 28px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.21;
        letter-spacing: normal;
        text-align: left;
        color: #456c0a;
    }
    .Alamat-Pengiriman {
        font-family: Poppins;
        font-size: 14px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #707070;
    }

    .nama-cs {
        margin-bottom: 5px;
        font-family: Poppins;
        font-size: 16px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.56;
        letter-spacing: normal;
        text-align: left;
        color: #456c0a;
    }
    .no_hp{
        margin-bottom: 5px;
        font-family: Poppins;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #707070;
    }
    .alamat {
        background-color: #ffffff;
        font-family: Poppins;
        margin-bottom: 5px;
        font-size: 14px;

    }
    .memilih_alamat {
        width: 143px;
        height: 30px;
        box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.16);
        border: solid 0.5px #66990c;
        background-color: #ffffff;
        margin-bottom: 30px;
    }
    .button_alamat {
        width: 113px;
        height: 20px;
        font-family: Poppins;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #548611;
    }
    .nama-toko {
        font-family: Poppins;
        font-size: 16px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.56;
        letter-spacing: normal;
        text-align: left;
        color: #456c0a;
    }
    .alamat-toko {
        font-family: Poppins;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #707070;
    }
    .nama-produk {
        width: 369px;
        height: 23px;
        font-family: Poppins;
        font-size: 16px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.56;
        letter-spacing: normal;
        text-align: left;
        color: #707070;
    }
    .harga {
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
    .jenis-pengiriman {
        font-family: Poppins;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.5;
        letter-spacing: normal;
        text-align: left;
        color: #707070;
    }
 </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
               {{-- untuk checkout bagian produk --}}
                <div class="card">
                    <div>
                        <div class="Checkout">Checkout</div><br>
                        <div class="Alamat-Pengiriman ">Alamat Pengiriman<hr></div>
                    </div>
                    <div class="card-boddy">
                        <div class="nama-cs">
                           Agnes Hata
                        </div>
                          <div class="no_hp">
                           087780133076
                        </div>
                        <div class="alamat">
                           Jalan Kolonel Ahmad Syam no 27B 
                           Kost Puri Cendana Desa Cikeruh Kecamatan Jatinangor
                        </div>
                        <div class="memilih_alamat" align="center">
                           <span class="button_alamat">Pilih alamat lain</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="nama-toko">Toko Bunga Kasih</div><br>
                        <div class="Alamat-toko">Jakarta Utara<hr></div>
                    </div>
                    <div class="card-boddy">
                        <div class="row">
                           <div class="col-md-2">
                               <img src="" alt="">
                           </div>
                           <div class="col-md-10">
                                <table>
                                    <div class="nama-produk">
                                        Lidah Mertua/Sansiviera lidah mertua golden
                                    </div>
                                    <div class="harga">
                                        Rp. 10.000.000
                                    </div>
                                    <div class="jenis-pengiriman">
                                        Pengiriman langsung : JNE Standar
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- batas untuk ptoduk --}}
               {{-- untuk checkout bagian jasa --}}
                {{-- <div class="card">
                    <div>
                        <div class="Checkout">Checkout</div><br>
                        <div class="Alamat-Pengiriman ">Depok Jawa Barat<hr></div>
                    </div>
                    <div class="card-boddy">
                        <div class="row">
                           <div class="col-md-2">
                               <img src="" alt="">
                           </div>
                           <div class="col-md-10">
                                <table>
                                    <div class="nama-produk">
                                        Sukiman Rivero
                                    </div>
                                    <div class="harga">
                                        Rp. 12.000.000
                                    </div>
                                    <div class="jenis-pengiriman">
                                        Jasa Arsitektur Taman. Desain akan dikirim melalui laman chat dengan kualitas terbaik
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- batas untuk jasa --}}
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card card-title">
                        <h3>Rincian Pembayaran</h3>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td>Total Belanja</td>
                                <td>Rp.10.000.000</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengiriman</td>
                                <td>Rp.10,000</td>
                            </tr>
                            <tr>
                                <td>Voucher & Promo</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td>10.010.000</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card">
                    <div class="card card-title">
                        <h3>Metode Pembayaran</h3>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td><h4> Total </h4></td>
                                <td>Rp.10.01ss0.000</td>
                            </tr>
                        </table>
                        <form action="/action_page.php">
                            <div class="form-check">
                                <label class="form-check-label" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Ovo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Alfamart
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" disabled>Indomaret
                                </label>
                            </div>
                            
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
