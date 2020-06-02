@extends('layout.default')
@section('title','Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width:450px; border-radius: 10px;">
                <div class="card-body" align="center">
                    <h4 class="card-title" style="color: #6b8a3c">Masuk Akun</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-secondary col-md-12" align="center">Masuk dengan Google</button>
                            </div>
                        </div>
                        
                        <hr width="40%" align="left"> atau <hr width="40%" align="right">

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #71b70b, #689e19); color: white;">
                                    {{ __('Masuk') }}
                                </button> <br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-align: center;color:#a6c372">
                                        {{ __('Lupa kata sandi??') }}
                                    </a>
                                @endif

                                 <p style="color:#a6c372">Belum punya akun? <b><a href="{{url('/register')}}"  style="color: #6b8a3c">Daftar sekarang</a></b></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
