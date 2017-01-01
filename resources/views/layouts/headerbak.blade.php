<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Pengajuan <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>        
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengguna <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Akun</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{url('')}}"><img src="#" alt="Logo" />Logo</a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="aj-menu pull-right">
                    <ul class="nav navbar-nav">
                      <li><a href="#"><i class="fa fa-user"></i> {{Auth::check() ? Auth::user()->name : 'Account'}}</a></li>
                      <li><a href="{{url('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                      <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                      <li><a href="{{Auth::check() ? url('auth/logout') : url('auth/login')}}"><i class="fa fa-lock"></i> {{Auth::check() ? 'Logout' : 'Login'}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->