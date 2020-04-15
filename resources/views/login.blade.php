<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login BitBit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="hold-transition sidebar-mini">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
             <!-- Brand/logo -->
            <a class="navbar-brand col-md-1" href="#" style="color: #6b8a3c">BitBit</a>
            
            
            <div class="input-group col-md-8 mb-3" style="margin-top: 10px;">
                <input type="text" class="form-control" style="color: #6b8a3c" placeholder="Cari produk atau jasa...">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                    </div>
            </div>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="#"><i class="fa fa-shopping-cart fa-2x" href="#"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}"><button type="button" class="btn btn-light" style="color: #6b8a3c">Masuk</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}"><button type="button" class="btn btn-success">Daftar</button></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 70px; " align="center">   
        <div class="card" style="width:450px; border-radius: 10px;">
            <div class="card-body" align="center">
                <h4 class="card-title" style="color: #6b8a3c">Masuk Akun</h4>
                
                <form class="form-horizontal" method="POST" action="">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-secondary col-md-12" align="center">Masuk dengan Google</button>
                            </div>
                        </div>
                        
                        <hr width="40%" align="left"> atau <hr width="40%" align="right">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Masukkan email" value="" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control " name="password" placeholder="Masukkan kata sandi" required autocomplete="current-password">
                            </div>
                        </div>
                    </div>  

                    <div class="form-group mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn col-md-12" style="background: linear-gradient(to right, #71b70b, #689e19); color: white;"> Masuk </button> <br>
                            <a href="#" style="text-align: center;color:#a6c372">Lupa kata sandi?</a> <br>
                            <p style="color:#a6c372">Belum punya akun? <b><a href="{{url('/register')}}"  style="color: #6b8a3c">Daftar sekarang</a></b></p>
                        </div>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
