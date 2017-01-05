@extends('layouts.master')

@section('title')
	Pendaftaran
@endsection

@section('content')
	<h2>Halaman Pendaftaran</h1>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<div class="panel-title">Nama Pengaju</div>
		</div>
		<div class="container">
		<ul class="media-list">
			<li class="media">
				<div class="media-left">
					<a href="">
						<img src="{{asset('../img/img-panel-100x120.png')}}" alt="photo" height="120px" width="100px">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Media heading</h4>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, rem.
				</div>
			</li>
		</ul></div>
	</div>
@endsection