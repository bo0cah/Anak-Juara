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

		<!-- icon untuk Title -->
		<link href="{{ asset('../pavicon.png') }}" rel='shortcut icon' type="image/png">

		<!-- Inclunde CSS bootstrap-->
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

		<!-- Include CSS font-awesome -->
		<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

		<!-- Include CSS custom dari halaman -->
		@yield('style')

		<style>
			.container{
				width: 75%;
			}
		</style>

	</head>
	<body>

		<!--Memanggil template header-->
		@include('layouts.header')

		<div class="container">
				<!--Memenggil konten halaman -->
				@yield('content')
		</div>

		@yield('sidenav')

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