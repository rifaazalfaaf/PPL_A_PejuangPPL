<div class="bitbit-navbar navbar navbar-expand-sm fixed-top navbar-bitbit">
    <div class="container">
         <!-- Brand/logo -->
        <a class="navbar-brand col-md-1" href="/"><img class="logo-bitbit mb-2" src="{{asset('img/logo.png')}}" style="width: 80px;" alt=""></a>
        
        
        <div class="input-group col-md-7 mb-3 p-0" style="margin-top: 10px;">
            <input type="text" class="form-control" id="myInput" style="color: #6b8a3c" placeholder="Cari produk atau jasa disini...">
                <div class="input-group-append" id="myDIV">
                    <button class="btn border border-left-0" style="background: #ffffff;" type="submit">
                        <i class="fa fa-search" style="color: #66990c"></i>
                    </button>
                </div>
        </div>
        <!-- Links -->
        <ul class="navbar-nav col-md-4">
            {{-- sebelum login --}}
            {{-- <li class="nav-item">
               <a class="nav-link px-3" href="{{url('/keranjang')}}">
                    <i class="fas fa-shopping-cart mt-1" style="color: #548611;font-size:25px;" href=""></i>
                </a>
            </li>
            <li class="nav-item">
                <div class="garis_verikal mt-1 mr-3" style="border-left: 2px #548611 solid; height: 45px;width: 0px;"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-1" href="{{url('/login')}}">
                    <button type="button btn-login" class="btn" style="width: 120px; height: 40px;box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);background-color: #ffffff; color:#548611">Masuk</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}">
                    <button type="button" class="btn" style="width: 120px; height: 40px;box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);background-color: #66990c; color:#ffffff">Daftar</button>
                </a>
            </li> --}}
            {{-- batas untuk sebelum login --}}

            {{-- setelah login --}}
            <li class="nav-item">
               <a class="nav-link pl-3" href="{{url('/keranjang')}}">
                    <i class="fas fa-shopping-cart mt-1" style="color: #548611;font-size:25px;" href=""></i>
                </a>
            </li>
            <li class="nav-item pt-1 mr-3">
                <a class="nav-link" href="{{url('/keranjang')}}">
                    <label for="keranjang" style="font-size: 18px;color: #548611;font-family: Poppins;">Keranjangku</label>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 mr-3" title="Pemberitahuan" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="isinya nanti pemberitahuan" style="color: #456c0a;" href="{{url('/pemberitahuan')}}">
                    <i class="fas fa-bell mt-1" style="color: #548611;font-size:25px;"></i>
                </a>
            </li>
            <li class="nav-item">
                    <div class="dropdown mt-1" align="center">
                        <img class="rounded-circle mt-1" src="{{asset('img/profileuser.png')}}" style="width: 26.6px; height: 26px;" alt="">
                        <label class="mt-2 pl-2" for="nama-user"  style="font-size: 18px;color: #548611;font-family: Poppins;">Agnes</label>
                        <div class="dropdown-content ">
                            <a class="border border-bottom" href="{{url('/profile')}}" style="color:#707070;">Data Diri</a>
                            <a class="border border-bottom" href="{{url('/buka_toko')}}" style="color:#707070;">Buka Toko</a>
                            <a class="border border-bottom" href="{{url('/jual_jasa')}}" style="color:#707070;">Jual Jasa</a>
                            <a class="border border-bottom" href="{{url('/login')}}" style="color:#707070;">Keluar Akun</a>
                        </div>
                    </div>
            </li>
        </ul>
    </div>
</div>