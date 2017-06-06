<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="SPK Seleksi Anak Juara" content="">
  <meta name="bo0cah" content="">
	<!--Judul Halaman-->
	<title>@yield('title')</title>
	<!--Style default-->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	@yield('style')
	<link href="{{ asset('../pavicon.png') }}" rel='shortcut icon' type="image/png">
	<style>
		.container{
			width: 75%;
		}
	</style>
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
	<script>
		@yield('script')
	</script>
	<!--Script default-->
	<script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>