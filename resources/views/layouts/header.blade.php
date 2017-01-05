<nav class="navbar navbar-default">
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
        <li role="presentation" class="active"><a href="{{url('pengajuan')}}"><i class="fa fa-file"></i> Pengajuan</a></li>
        <li role="presentation" class=""><a href="{{url('checkout')}}"><i class="fa fa-print"></i> Data Keluar</a></li>
        <li role="presentation" class=""><a href="{{url('cart')}}"><i class="fa fa-archive"></i> Penerima</a></li>
        <li role="presentation" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengguna <span class="caret"></span></a>
          <ul role="presentation" class="dropdown-menu dropdown-menu-left">
            <li ><a href="#"><i class="fa fa-user"></i> {{Auth::check() ? Auth::user()->name : 'Pengaturan'}}</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{Auth::check() ? url('auth/logout') : url('auth/login')}}"><i class="fa fa-lock"></i> {{Auth::check() ? 'Logout' : 'Login'}}</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>