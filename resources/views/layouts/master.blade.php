<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="SPK Seleksi Anak Juara" content="">
    <meta name="bo0cah" content="">
	<title>@yield('title')</title>
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
		<link href="{{asset('css/animate.css')}}" rel="stylesheet">
		<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/main.css')}}" rel="stylesheet">
		@yield('style')
</head>
<body>
	@include('layouts.header')
	
	<div class="jumbotron">
		<div class="container">
			@yield('content')
		</div>
	</div>

	@include('layouts.footer')
	
	@yield('script')
	<script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('js/price-range.js')}}"></script>
  <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>