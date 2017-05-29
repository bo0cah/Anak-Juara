@extends('layouts.master')

@section('title','Tambah Pengajuan')

@section('content')
	<h2>Tambah Pengajuan</h2>
	<form class="form-horizontal">

    <legend>Biodata Anak</legend><!-- Form name -->

    <div class="form-group"> <!-- NIK -->
      <label class="col-sm-3 control-label" for="NIK">Nomor Induk Kependudukan</label>
      <div class="col-sm-4">
        <input id="NIK" name="NIK" placeholder="NIK" class="form-control input-md" required="0-9" type="text">
      </div>

      <label class="col-md-1 control-label" for="fotoAnak">Gambar</label>
      <div class="col-sm-4">
        <input type="file" id="fotoAnak">
        <p class="help-block">Dimensi gambar maksimal 600x800 pixel.</p>
      </div>
    </div>

    <div class="form-group">  <!-- Nama lengkap -->
      <label class="col-sm-3 control-label" for="nama">Nama Lengkap</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
      </div>

      <label class="col-sm-1 control-label" for="nama">Kelamin</label>
      <div class="col-sm-2">
        <select id="select" name="select" class="form-control input-md">
            <option value="0">-- pilih --</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
        </select>
      </div>
    </div>

    <div class="form-group"><!-- Tempat, tanggal lahir -->
      <label class="col-sm-3 control-label" for="nama">Tempat Lahir</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">Tanggal</label>
      <div class="col-sm-3">
        <input id="nama" name="nama" placeholder="mm/dd/yyyy" class="form-control input-md" required="" type="date">
      </div>
    </div>

    <div class="form-group"><!-- Anak ke-.. dari.. -->
      <label class="col-sm-3 control-label" for="nama">Anak ke-</label>
      <div class="col-sm-1">
        <input id="nama" name="nama" placeholder="2" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-1 control-label" for="nama">dari</label>
      <div class="col-sm-1">
        <input id="nama" name="nama" placeholder="2" class="form-control input-md" required="" type="number">
      </div>
      <h5><strong>bersaudara</strong></h5>
    </div>

    <div class="form-group"> <!-- alamat anak -->
      <label class="col-sm-3 control-label" for="nama">Alamat Anak</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="Nomor, jalan, blok, gang, nama perumahan" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">RT</label>
      <div class="col-sm-1">
        <input id="nama" name="nama" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-1 control-label" for="nama">RW</label>
      <div class="col-sm-1">
        <input id="nama" name="nama" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
    </div>

    <div class="form-group"> <!-- alamat anak -->
      <label class="col-sm-3 control-label" for="nama">Desa/Kelurahan</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="nama desa/kelurahan" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">Kecamatan</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="nama kecamatan" class="form-control input-md" required="" type="text">
      </div>
    </div>

    <div class="form-group"> <!-- wilayah pembinaan -->
      <label class="col-sm-3 control-label" for="nama">Wilayah pembinaan terdekat</label>
      <div class="col-sm-4">
        <select id="select" name="select" class="form-control input-md">
            <option value="0">Bengkong</option>
            <option value="1">Tanjung Uma</option>
            <option value="2">Tanjung Piayu</option>
        </select>
      </div>
    </div>

    <legend>Pendidikan Anak</legend>

    <div class="form-group"> <!-- Jenjang pendidikan -->
      <label class="col-sm-3 control-label" for="nama">Jenjang Pendidikan</label>
      <div class="col-sm-4">
        <select id="select" name="select" class="form-control input-md">
          <option value="0">-- pilih --</option>
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA/SMK</option>
          <option value="4">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- nilai anak -->
      <label class="col-sm-3 control-label" for="nama">Kelas/Semester</label>
      <div class="col-sm-2">
        <input id="nama" name="nama" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-3 control-label" for="nama">Nilai Rata-Rata/IPK terbaru</label>
      <div class="col-sm-2">
        <input id="nama" name="nama" placeholder="00,0" class="form-control input-md" required="" type="number">
      </div>
    </div>

    <div class="form-group"> <!-- alamat sekolah.kampus -->
      <label class="col-sm-3 control-label" for="nama">Nama Sekolah/Kampus</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="sekolah/kampus" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">Alamat</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" required="" type="text">
      </div>
    </div>

    <legend>Data Orang Tua/Wali</legend>

    <div class="form-group"> <!-- Keberadaan Orang Tua -->
      <label class="col-sm-3 control-label" for="nama">Keberadaan Orang Tua</label>
      <div class="col-sm-4">
        <select id="select" name="select" class="form-control input-md">
          <option value="0">Lengkap</option>
          <option value="1">Piatu</option>
          <option value="2">Yatim</option>
          <option value="3">Yatim Piatu</option>
        </select>
      </div>
    </div>
    <!-- Data Ayah -->
    <div class="form-group"> <!-- nama ayah -->
      <label class="col-sm-3 control-label" for="nama">Nama Ayah</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="sekolah/kampus" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">Pendidikan</label>
      <div class="col-sm-3 pull-left">
        <select id="select" name="select" class="form-control input-md">
          <option value="0">-- pilih --</option>
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA/SMK</option>
          <option value="4">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- serumah dengan anak -->
      <div class="col-md-4 col-sm-offset-3">
        <div class="checkbox">
          <label for="alamat_ayah-0">
            <input name="alamat_ayah" id="cambiar_pwd-0" value="1" type="checkbox">
            Serumah dengan anak
          </label>
        </div>
      </div>
    </div>

    <div class="form-group"> <!-- alamat ayah -->
      <label class="col-md-3 control-label" for="alamat_ayah">Alamat Ayah</label>
      <div class="col-sm-8">
        <input id="nama" name="nama" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" required="" type="text">
      </div>
    </div>

    <!-- Data Ibu -->
    <div class="form-group"> <!-- nama Ibu -->
      <label class="col-sm-3 control-label" for="nama">Nama Ibu</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="sekolah/kampus" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">Pendidikan</label>
      <div class="col-sm-3 pull-left">
        <select id="select" name="select" class="form-control input-md">
          <option value="0">-- pilih --</option>
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA/SMK</option>
          <option value="4">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- serumah dengan anak -->
      <div class="col-md-4 col-sm-offset-3">
        <div class="checkbox">
          <label for="alamat_ibu-0">
            <input name="alamat_ibu" id="cambiar_pwd-0" value="1" type="checkbox">
            Serumah dengan anak
          </label>
        </div>
      </div>
    </div>

    <div class="form-group"> <!-- alamat ibu -->
      <label class="col-md-3 control-label" for="alamat_ibu">Alamat Ayah</label>
      <div class="col-sm-8">
        <input id="nama" name="nama" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" required="" type="text">
      </div>
    </div>

    <!-- Data Wali -->
    <div class="form-group"> <!-- nama wali -->
      <label class="col-sm-3 control-label" for="nama">Nama wali</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="sekolah/kampus" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="nama">Pendidikan</label>
      <div class="col-sm-3 pull-left">
        <select id="select" name="select" class="form-control input-md">
          <option value="0">-- pilih --</option>
          <option value="1">SD</option>
          <option value="2">SMP</option>
          <option value="3">SMA/SMK</option>
          <option value="4">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- serumah dengan anak -->
      <div class="col-md-4 col-sm-offset-3">
        <div class="checkbox">
          <label for="alamat_wali-0">
            <input name="alamat_wali" id="cambiar_pwd-0" value="1" type="checkbox">
            Serumah dengan anak
          </label>
        </div>
      </div>
    </div>

    <div class="form-group"> <!-- alamat wali -->
      <label class="col-md-3 control-label" for="alamat_wali">Alamat wali</label>
      <div class="col-sm-8">
        <input id="nama" name="nama" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" required="" type="text">
      </div>
    </div>

    <!-- Deskripsi -->
    <div class="form-group">
      <label class="col-md-3 control-label" for="deskripsi">Deskripsi Diri dan Lingkungan</label>
      <div class="col-md-6">
        <textarea class="form-control" id="comentario" name="deskripsi"></textarea>
      </div>
    </div>

@endsection

@section('script')

@endsection
