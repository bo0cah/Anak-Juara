@extends('layouts.master')

@section('title')
	Login
@endsection

@section('content')
	<h2>Login</h2>
<div class="container" style="margin-top:30px">
<div class="col-md-4">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
  <div class="panel-body">
   <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Username or Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-sm btn-default">Sign in</button>
</form>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="javascript:;" class="btn btn-sm btn-success">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
</div>
<br>
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="javascript:;" class="btn btn-sm btn-success">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>
<hr>

</div>

	
@endsection