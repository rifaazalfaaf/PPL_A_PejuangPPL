@extends('layout.default')
@section('title','Deskripsi Tukang Kebun')

@section('styles')
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
#myImg1 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}
#myImg1:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    margin-top: 70px;
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
                                    <p>Halo, nama saya Sukiman Rivero. Saya seorang Tukang  kebun professional. Saya sudah mendalami pekerjaan  ini selama 10 tahun terakhir. Client saya adalah orang-orang penting di negara ini yang memiliki kebun yang luas dan besar. </p>

                                    <p>Silahkan lihat hasi karya saya, dan chat saya apabila memiliki requirement yang di inginkan</p>
                                    </pre>
                                    <p class="harga">Mahakarya</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img id="myImg" class="rounded-lg mahakarya" src="{{asset('img/mahakarya3.png')}}" alt="">
                                            <div id="myModal" class="modal">
                                                <span class="close">&times;</span>
                                                <img class="modal-content" id="img01">
                                                <div id="caption"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img id="myImg1" class="rounded-lg mahakarya" src="{{asset('img/mahakarya_v2.png')}}" alt="">
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
                    <button type="submit" class="btn btn-beli col-md-12">
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

@section('scripts')
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
@endsection

