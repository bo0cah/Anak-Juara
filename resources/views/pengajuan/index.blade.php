@extends('layouts.master')
@section('title','Pengajuan') <!--pemberian judul halaman-->
@section('content')
<h2>Pengajuan</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <form action="" class="form-inline">
                <div class="input-group input-lg" style="width: 60%">
                    <input type="text" class="form-control input-md" placeholder="Pencarian...">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-md" type="button"><i class="glyphicon glyphicon-search"></i> Cari</button>
                    </span>
                  </div><!-- /input-group -->
                <a href="{{ url('pengajuan-form') }}">
                    <div class="btn btn-primary btn-md" type="button">Pengajuan Baru</div>
                </a>
            </form>
        </div>
    </div><br>

    <!--Rangking dan gambar-->
    @for ($baris=0; $baris < 5; $baris++)
      <div class="row">
        @for ($kolom=0; $kolom < 2; $kolom++)
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
                    <span class="label label-info">SD</span>
                    <span class="label label-success">Yatim</span>
                    <span class="label label-danger">Batu Ampar</span>
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
        @endfor
      </div>
    @endfor

@endsection
