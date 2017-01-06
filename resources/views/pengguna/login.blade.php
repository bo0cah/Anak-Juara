@extends('layouts.layout-login')
@section('title')
Login
@endsection
@section('style')
<link rel="stylesheet" href="">
@endsection
@section('content')
<div class="container" style="width: 300px">
	<form>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"> Check me out
			</label>
		</div>
		<button type="submit" class="btn btn-warning btn-lg pull-right">Submit</button>
	</form>
</div>
@endsection