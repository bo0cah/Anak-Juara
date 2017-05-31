@extends('layouts.master')

@section('title','Tambah Pengajuan')

@section('content')
	<h2>Tambah Pengajuan</h2>
	<form class="form-horizontal" role="form" method="POST" action="pengajuan-form">
    {{ csrf_field() }}

    <legend>Biodata Anak</legend><!-- Form name -->

    <div class="form-group"> <!-- NIK -->
      <label class="col-sm-3 control-label" for="NIK">Nomor Induk Kependudukan</label>
      <div class="col-sm-4">
        <input id="NIK" name="NIK" placeholder="NIK" class="form-control input-md" required="0-9" type="text">
      </div>

      <label class="col-md-1 control-label" for="Photo">Gambar</label>
      <div class="col-sm-4">
        <input type="file" id="Photo">
        <p class="help-block">Dimensi gambar maksimal 600x800 pixel.</p>
      </div>
    </div>

    <div class="form-group">  <!-- Nama lengkap -->
      <label class="col-sm-3 control-label" for="nama">Nama Lengkap</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
      </div>

      <label class="col-sm-1 control-label" for="kelamin">Kelamin</label>
      <div class="col-sm-2">
        <select id="select" name="kelamin" class="form-control input-md">
            <option value="Laki-Laki">{{ $lk=>0 }}</option>
            <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>

    <div class="form-group"><!-- Tempat, tanggal lahir -->
      <label class="col-sm-3 control-label" for="tempat_lahir">Tempat Lahir</label>
      <div class="col-sm-4">
        <input id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="Tgl_Lahir">Tanggal</label>
      <div class="col-sm-3">
        <input id="Tgl_Lahir" name="Tgl_Lahir" placeholder="mm/dd/yyyy" class="form-control input-md" required="" type="date">
      </div>
    </div>

    <div class="form-group"><!-- Anak ke-.. dari.. -->
      <label class="col-sm-3 control-label" for="Anak_Ke">Anak ke-</label>
      <div class="col-sm-1">
        <input id="Anak_Ke" name="Anak_Ke" placeholder="2" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-1 control-label" for="Jlh_Sdr">dari</label>
      <div class="col-sm-1">
        <input id="Jlh_Sdr" name="Jlh_Sdr" placeholder="2" class="form-control input-md" required="" type="number">
      </div>
      <h5><strong>bersaudara</strong></h5>
    </div>

    <div class="form-group"> <!-- alamat anak -->
      <label class="col-sm-3 control-label" for="Alamat_Anak">Alamat Anak</label>
      <div class="col-sm-4">
        <input id="Alamat_Anak" name="Alamat_Anak" placeholder="Nomor, jalan, blok, gang, nama perumahan" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="RT_Anak">RT</label>
      <div class="col-sm-1">
        <input id="RT_Anak" name="RT_Anak" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-1 control-label" for="RW_Anak">RW</label>
      <div class="col-sm-1">
        <input id="RW_Anak" name="RW_Anak" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
    </div>

    <div class="form-group"> <!-- alamat anak -->
      <label class="col-sm-3 control-label" for="Desa_Anak">Desa/Kelurahan</label>
      <div class="col-sm-4">
        <input id="Desa_Anak" name="Desa_Anak" placeholder="nama desa/kelurahan" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="Kec_Anak">Kecamatan</label>
      <div class="col-sm-4">
        <input id="Kec_Anak" name="Kec_Anak" placeholder="nama kecamatan" class="form-control input-md" required="" type="text">
      </div>
    </div>

    <div class="form-group"> <!-- wilayah pembinaan -->
      <label class="col-sm-3 control-label" for="Wilayah_Pembinaan">Wilayah pembinaan terdekat</label>
      <div class="col-sm-4">
        <select id="Wilayah_Pembinaan" name="Wilayah_Pembinaan" class="form-control input-md">
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

    <div class="form-group pull-right">
       <button type="submit" class="btn btn-primary">
          <i class="fa fa-btn fa-sign-in"></i> Simpan
       </button>
    </div>
</form>

@endsection

@section('script')

@endsection
