@extends('layout.default')
@section('title','Keranjang')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-block">
                    <div class="table">
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

            <div class="col-md-4">
                <div class="card">
                    <div class="card card-title">
                        <h3>Ringkasan Belanja</h3>
                    </div>
                    <div>
                        <tr>
                            <td><h3><small>Total Harga</small></h3></td>
                            <td>Rp.10.000.000</td>
                        </tr>
                    </div>
                </div>
                <a href="{{url('/checkout')}}"><button>
                    Bayar Sekarang
                </button></a>
            </div>
        </div>
    </div>
@endsection
