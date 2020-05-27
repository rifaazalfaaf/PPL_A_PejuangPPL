<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>



    @yield('page-css')
    <link rel="stylesheet" href="css/pejuang_custom.css" />
    {{-- <link rel="stylesheet" href="{{asset('../css/pejuang-custom.css')}}"> --}}

    @yield('styles')


</head>
<body class="hold-transition sidebar-mini" style="background: #fafafa">
    @include('layout.navbar')
    
    <div class="page-content">
        <div style="margin-top: 100px">
            @yield('content')    
        </div>
        
    </div>
    
    @include('layout.footer')

    @yield('page-css')

    @yield('scripts')
    <script>
        $(document).ready(function(){
          $('[data-toggle="popover"]').popover();   
        });
    </script>

</body>
