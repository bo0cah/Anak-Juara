<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="SPK Seleksi Anak Juara" content="">
    <meta name="bo0cah" content="">
    <!--Judul Halaman-->
    <title>@yield('title')</title>
    <!--Style default-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    @yield('style')
    <!--Memanggil style tambahan-->
  </head>
  <body>
<!--Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar "></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><img src="{{asset('../img/logo-rz.png') }}" alt="Logo" height="50px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav nav-pills navbar-right">
            <li role="presentation" class=""><a href="{{url('/')}}"> </a></li>
          </ul>
        </div><!--.nav-collapse -->
      </div>
    </nav>
      <!--Memenggil konten halaman-->
    <div class="container" style="padding-top: 100px">
       @yield('content')
     </div>
      <!--Memanggil template footer-->
      @include('layouts.footer')
      <!--Script tambahan-->
      @yield('script')
      <!--Script default-->
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
      <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
      <script src="{{asset('js/price-range.js')}}"></script>
      <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
  </body>
  </html>