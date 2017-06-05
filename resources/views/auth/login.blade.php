@extends('layouts.layout-login')
@section('content')
<div class="container" style="width: 500px">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
         <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
               <form class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="control-label">E-Mail Address</label>
                     <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}">
                       
                     @if ($errors->has('email'))
                        <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                        </span>
                     @endif

                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" >Password</label>
                     <input id="password" type="password" class="form-control input-lg" name="password">
                        
                     @if ($errors->has('password'))
                        <span class="help-block">
                           <strong>{{ $errors->first('password') }}</strong>
                        </span>
                     @endif

                  </div>

                  {{-- <div class="form-group">
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" name="remember"> Ingat saya
                        </label>
                     </div>
                  </div> --}}

                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Login
                     </button>
                     <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa kata sandi?</a>
                  </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection