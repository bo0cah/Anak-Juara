@extends('layouts.master')
@section('title','Pengajuan') <!-->pemberian judul halaman-->
@section('content')
<h2>Halaman Pengajuan</h2>
    <div class="row"><!--row 1-->
        <div class="col-lg-8 col-lg-offset-2">
            <div class="input-group input-lg">
                <input type="text" class="form-control input-lg" placeholder="Pencarian...">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="button"><i class="glyphicon glyphicon-search"></i> Cari</button>
                <a href="{{ url('/pengajuan-baru') }}">
                <button class="btn btn-warning btn-lg" type="button">
                    <i class="glyphicon glyphicon-add"></i> Pengajuan Baru</button>
                </a>
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><br><!--row 1 end-->
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ asset('img/img-ex-354x472.png') }}" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>Abdul Aziz Zulfikar Jafar</h4>
                        <small>
                            <cite title="">Jl.Kuda Laut Bukit Senyum  RT/RW : 004/007 Kel. Sei Jodoh  Kec. Batu Ampar <i class="glyphicon glyphicon-map-marker"></i></cite>
                        </small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i> 083245674538
                            <i class="glyphicon glyphicon-gift"></i> 18 Agustus 2001
                            <br>
                            <span class="label label-default">SD</span>
                            <span class="label label-default">Yatim</span>
                            <span class="label label-default">Batu Ampar</span>
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Lihat Profil</button>
                            <button type="button" class="btn btn-primary">Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ asset('img/img-ex-354x472.png') }}" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>Abdul Aziz Zulfikar Jafar</h4>
                        <small>
                            <cite title="">Jl.Kuda Laut Bukit Senyum  RT/RW : 004/007 Kel. Sei Jodoh  Kec. Batu Ampar <i class="glyphicon glyphicon-map-marker"></i></cite>
                        </small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i> 083245674538
                            <i class="glyphicon glyphicon-gift"></i> 18 Agustus 2001
                            <br>
                            <span class="label label-default">SD</span>
                            <span class="label label-default">Yatim</span>
                            <span class="label label-default">Batu Ampar</span>
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Lihat Profil</button>
                            <button type="button" class="btn btn-primary">Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-5">
                        <img src="{{ asset('img/img-ex-354x472.png') }}" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-md-7">
                        <h4>Abdul Aziz Zulfikar Jafar</h4>
                        <small>
                            <cite title="">Jl.Kuda Laut Bukit Senyum  RT/RW : 004/007 Kel. Sei Jodoh  Kec. Batu Ampar <i class="glyphicon glyphicon-map-marker"></i></cite>
                        </small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i> 083245674538
                            <i class="glyphicon glyphicon-gift"></i> 18 Agustus 2001
                            <br>
                            <span class="label label-default">SD</span>
                            <span class="label label-default">Yatim</span>
                            <span class="label label-default">Batu Ampar</span>
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Lihat Profil</button>
                            <button type="button" class="btn btn-primary">Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-5">
                        <img src="{{ asset('img/img-ex-354x472.png') }}" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-md-7">
                        <h4>Abdul Aziz Zulfikar Jafar</h4>
                        <small>
                            <cite title="">Jl.Kuda Laut Bukit Senyum  RT/RW : 004/007 Kel. Sei Jodoh  Kec. Batu Ampar <i class="glyphicon glyphicon-map-marker"></i></cite>
                        </small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i> 083245674538
                            <i class="glyphicon glyphicon-gift"></i> 18 Agustus 2001
                            <br>
                            <span class="label label-default">SD</span>
                            <span class="label label-default">Yatim</span>
                            <span class="label label-default">Batu Ampar</span>
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Lihat Profil</button>
                            <button type="button" class="btn btn-primary">Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-5">
                        <img src="{{ asset('img/img-ex-354x472.png') }}" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-md-7">
                        <h4>Abdul Aziz Zulfikar Jafar</h4>
                        <small>
                            <cite title="">Jl.Kuda Laut Bukit Senyum  RT/RW : 004/007 Kel. Sei Jodoh  Kec. Batu Ampar <i class="glyphicon glyphicon-map-marker"></i></cite>
                        </small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i> 083245674538
                            <i class="glyphicon glyphicon-gift"></i> 18 Agustus 2001
                            <br>
                            <span class="label label-default">SD</span>
                            <span class="label label-default">Yatim</span>
                            <span class="label label-default">Batu Ampar</span>
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Lihat Profil</button>
                            <button type="button" class="btn btn-primary">Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection