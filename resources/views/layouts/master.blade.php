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
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	@yield('style')
	<!--Memanggil style tambahan-->

</head>
<body>
	<!--Memanggil template header-->
	@include('layouts.header')
	<!--Memenggil konten halaman-->
	<div class="container">
			@yield('content')
	</div>
	<!--Memanggil template footer-->
	@include('layouts.footer')
	<!--Script tambahan-->
	@yield('script')
	<!--Script default-->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('js/price-range.js')}}"></script>
  <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
</body>
</html>