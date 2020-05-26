@extends('layout.default')
@section('title','Deskripsi Arsitektur Taman')

@section('styles')
    <style>
        .bibit-card{
            background-color: #ffffff;
        }
        .gambar-tukang {
            width: 300px;
            height: 300.8px;
        }
        .harga {
            font-family: Poppins;
            font-size: 17px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: left;
            color: #707070;
        }
        .jumlah_harga{
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
        .deskripsi_tukang{
            font-family: Poppins;
            font-size: 16px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: left;
            color: #707070;
            text-align: justify;
        }
        .mahakarya{
            width: 160px;
            height: 160px;
        }
        .alamat_deskripsi {
            font-family: Poppins;
            font-size: 18px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: left;
            color: #548611;
        }
        .nilai_rating{
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
        .Ulasan {
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
        .bitbit-profile-photo{
            width: 51.3px;
            height: 50px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card bitbit-card rounded-0 border border-light">
                    <div class="container my-3">
                        <div class="row pl-3">
                            <div class="col-md-12 mb-3">
                                <h3 class="nama-produk">Sukiman Rivero</h3>
                            </div>
                            <div class="col-md-5">
                                <img class="gambar-tukang rounded" src="{{asset('img/tukangkebun3.png')}}" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="col-md-12 mb-3">
                                    <table><tr>
                                        <td class="harga" style="width: 50%">Harga</td>
                                        <td class="jumlah_harga">500.000/minggu</td>
                                    </tr></table><hr>
                                </div>
                                <div class="col-md-12 deskripsi_tukang">
                                    <p>Halo, nama saya Sukiman Rivero. Saya Arsitektur Taman professional, saya lulusan Arsitektur Landscape dari IPB. Keahlian saya tidak diragukan lagi. Langsung chat saya atau telepon saya, harga nego tipis. </p>

                                    <p>Silahkan lihat hasi karya saya, dan chat saya apabila memiliki requirement yang di inginkan</p>
                                    </pre>
                                    <p class="harga">Mahakarya</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="rounded-lg mahakarya" src="{{asset('img/arsi.png')}}" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <img class="rounded-lg mahakarya" src="{{asset('img/arsi2.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bitbit-card rounded-0 border border-light">
                    <div class="my-3">
                        <h3 class="container alamat_deskripsi">Depok, Jawa Barat</h3>    
                        <div class="container">
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> <span class="nilai_rating"> (10)</span> 
                            </div>
                        </div>
                    </div>
                </div><br>
                <div align="center">
                    <button type="submit" class="btn btn-primary col-md-12">
                        Gunakan Jasa
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
