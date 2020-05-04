@extends('layout.default')
@section('title','Deskripsi Tukang Kebun')

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
                                <td>500.000/minggu</td>
                            </tr>
                        </div>
                        <div class="col-md-12">
                            <p>
                                Hallo nama saya Sukiman Rivero. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div>
                            <div class="col-md-12">
                                <p>Mahakarya</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('public/img/tukangkebun.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card card-title">
                        <h3>Depok, Jawa Barat</h3>
                    </div>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>(30)
                    </div>
                </div>
                <button>
                    Gunakan Jasa
                </button>
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
