@extends('layouts.master')

@section('title','Tambah Pengajuan')

@section('content')
	<h2>Tambah Pengajuan</h2>
	<form class="form-horizontal" role="form" method="POST" action="pengajuan-form" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <legend>Biodata Anak</legend><!-- Form name -->

    <div class="form-group"> <!-- NIK -->
      <label class="col-sm-3 control-label" for="NIK">Nomor Induk Kependudukan</label>
      <div class="col-sm-4">
        <input id="NIK" name="NIK" placeholder="NIK" class="form-control input-md" required="[0-9]+" type="number">
      </div>

      <label class="col-md-2 control-label" for="Photo">Photo Anak</label>
      <div class="col-sm-3">
        <input type="file" id="Photo" name="Photo">
        {{-- <p class="help-block">Dimensi maksimal 600x800 pixel.</p> --}}
      </div>
    </div>

    <div class="form-group">  <!-- Nama lengkap -->
      <label class="col-sm-3 control-label" for="nama">Nama Lengkap</label>
      <div class="col-sm-4">
        <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control input-md" required="" type="text">
      </div>

      <label class="col-sm-2 checkbox" for="kelamin">
        <input type="radio" name="kelamin" id="kelamin_lk" value="Laki-Laki" checked>
        Laki-Laki
      </label>
      <label class="col-sm-2 checkbox" for="kelamin">
        <input type="radio" name="kelamin" id="kelamin_pr" value="Perempuan">
        Perempuan
      </label>
    </div>

    <div class="form-group"><!-- Tempat, tanggal lahir -->
      <label class="col-sm-3 control-label" for="tempat_lahir">Tempat Lahir</label>
      <div class="col-sm-4">
        <input id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-2 control-label" for="Tgl_Lahir">Tanggal lahir</label>
      <div class="col-sm-3">
        <input id="Tgl_Lahir" name="Tgl_Lahir" class="form-control input-md" required="0-9,/" type="date">
      </div>
    </div>

    <div class="form-group"><!-- Anak ke-.. dari.. -->
      <label class="col-sm-3 control-label" for="Anak_Ke">Anak ke-</label>
      <div class="col-sm-2">
        <input id="Anak_Ke" name="Anak_Ke" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-1 control-label" for="Jlh_Sdr">dari</label>
      <div class="col-sm-2">
        <input id="Jlh_Sdr" name="Jlh_Sdr" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <h5><strong>bersaudara</strong></h5>
    </div>

    <!-- Deskripsi diri anak-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="Deskripsi_Diri">Deskripsi Diri dan Lingkungan</label>
      <div class="col-md-9">
        <textarea class="form-control" id="Deskripsi_Diri" name="Deskripsi_Diri" placeholder="Ceritakan secara singkat aktivitas anak dan keadaan lingkungan."></textarea>
      </div>
    </div> 

    <div class="form-group"> <!-- alamat anak -->
      <label class="col-sm-3 control-label" for="Alamat_Anak">Alamat Anak</label>
      <div class="col-sm-4">
        <input id="Alamat_Anak" name="Alamat_Anak" placeholder="Nomor, jalan, blok, gang, nama perumahan" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="RT_Anak">RT/RW</label>
      <div class="col-sm-2">
        <input id="RT_Anak" name="RT_Anak" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <div class="col-sm-2">
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
      <label class="col-sm-3 control-label" for="Jenjang_Pendidikan">Jenjang Pendidikan</label>
      <div class="col-sm-4">
        <select id="Jenjang_Pendidikan" name="Jenjang_Pendidikan" class="form-control input-md">
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA/SMK">SMA/SMK</option>
          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- nilai anak -->
      <label class="col-sm-3 control-label" for="Kelas_Smt">Kelas/Semester</label>
      <div class="col-sm-2">
        <input id="Kelas_Smt" name="Kelas_Smt" placeholder="00" class="form-control input-md" required="" type="number">
      </div>
      <label class="col-sm-3 control-label" for="Nilai_IPK">Nilai Rata-Rata/IPK terbaru</label>
      <div class="col-sm-2">
        <input id="Nilai_IPK" name="Nilai_IPK" placeholder="00,0" class="form-control input-md" required="" type="string">
      </div>
    </div>

    <div class="form-group"> <!-- alamat sekolah.kampus -->
      <label class="col-sm-3 control-label" for="Nama_Sklh_Kampus">Nama Sekolah/Kampus</label>
      <div class="col-sm-4">
        <input id="Nama_Sklh_Kampus" name="Nama_Sklh_Kampus" placeholder="sekolah/kampus" class="form-control input-md" required="" type="text">
      </div>
      <label class="col-sm-1 control-label" for="Alamat_Sekolah">Alamat</label>
      <div class="col-sm-4">
        <input id="Alamat_Sekolah" name="Alamat_Sekolah" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" required="" type="address">
      </div>
    </div>

    <div class="form-group"> <!-- Keberadaan Orang Tua -->
      <label class="col-sm-3 control-label" for="Keberadaan_Ortu">Keberadaan Orang Tua</label>
      <div class="col-sm-4">
        <select id="Keberadaan_Ortu" name="Keberadaan_Ortu" class="form-control input-md">
          <option value="Lengkap">Lengkap</option>
          <option value="Piatu">Piatu</option>
          <option value="Yatim">Yatim</option>
          <option value="Yatim Piatu">Yatim Piatu</option>
        </select>
      </div>
    </div>

    <!-- Data Ayah -->
    <legend>Data Ayah</legend>
    <div class="form-group"> <!-- nama ayah -->
      <label class="col-sm-3 control-label" for="Nama_Ayah">Nama Ayah</label>
      <div class="col-sm-4">
        <input id="Nama_Ayah" name="Nama_Ayah" placeholder="Nama Lengkap Ayah" class="form-control input-md" type="text">
      </div>
      <label class="col-sm-1 control-label" for="Pend_Ayah">Pendidikan</label>
      <div class="col-sm-3 pull-left">
        <select id="Pend_Ayah" name="Pend_Ayah" class="form-control input-md">
          <option value="Tidak Sekolah">Tidak Sekolah</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA/SMK">SMA/SMK</option>
          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- serumah dengan anak -->
      <div class="col-md-4 col-sm-offset-3">
        <div class="checkbox">
          <label for="Ayah_Serumah">
            <input name="Ayah_Serumah" id="Ayah_Serumah" value="1" type="checkbox">
            Serumah dengan anak
          </label>
        </div>
      </div>
    </div>

    <div class="form-group"> <!-- alamat ayah -->
      <label class="col-md-3 control-label" for="Alamat_Ayah">Alamat Ayah</label>
      <div class="col-sm-8">
        <input id="Alamat_Ayah" name="Alamat_Ayah" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" type="text">
      </div>
    </div>

    <!-- Data Ibu -->
    <legend>Data Ibu</legend>
    <div class="form-group"> <!-- nama Ibu -->
      <label class="col-sm-3 control-label" for="Nama_Ibu">Nama Ibu</label>
      <div class="col-sm-4">
        <input id="Nama_Ibu" name="Nama_Ibu" placeholder="Nama Lengkap Ibu" class="form-control input-md" type="text">
      </div>
      <label class="col-sm-1 control-label" for="Pend_Ibu">Pendidikan</label>
      <div class="col-sm-3 pull-left">
        <select id="Pend_Ibu" name="Pend_Ibu" class="form-control input-md">
          <option value="Tidak Sekolah">Tidak Sekolah</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA/SMK">SMA/SMK</option>
          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- ibu serumah dengan anak? -->
      <div class="col-md-4 col-sm-offset-3">
        <div class="checkbox">
          <label for="Ibu_Serumah">
            <input name="Ibu_Serumah" id="Ibu_Serumah" value="1" type="checkbox">
            Serumah dengan anak
          </label>
        </div>
      </div>
    </div>

    <div class="form-group"> <!-- alamat ibu -->
      <label class="col-md-3 control-label" for="Alamat_Ibu">Alamat Ibu</label>
      <div class="col-sm-8">
        <input id="Alamat_Ibu" name="Alamat_Ibu" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" type="text">
      </div>
    </div>

    <!-- Data Wali -->
    <legend>Data Wali</legend>
    <div class="form-group"> <!-- nama wali -->
      <label class="col-sm-3 control-label" for="Nama_Wali">Nama wali</label>
      <div class="col-sm-4">
        <input id="Nama_Wali" name="Nama_Wali" placeholder="Nama Lengkap Wali" class="form-control input-md" type="text">
      </div>
      
      <label class="col-sm-1 control-label" for="Pend_Wali">Pendidikan</label>
      <div class="col-sm-3 pull-left">
        <select id="Pend_Wali" name="Pend_Wali" class="form-control input-md">
          <option value="Tidak Sekolah">Tidak Sekolah</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA/SMK">SMA/SMK</option>
          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
        </select>
      </div>
    </div>

    <div class="form-group"> <!-- wali serumah dengan anak? -->
      <div class="col-md-4 col-sm-offset-3">
        <div class="checkbox">
          <label for="Wali_Serumah">
            <input name="Wali_Serumah" id="Wali_Serumah" value="1" type="checkbox">
            Serumah dengan anak
          </label>
        </div>
      </div>
    </div>

    <div class="form-group"> <!-- alamat wali -->
      <label class="col-md-3 control-label" for="Alamat_Wali">Alamat wali</label>
      <div class="col-sm-8">
        <input id="Alamat_Wali" name="Alamat_Wali" placeholder="nomor, nama jalan, kelurahan, kecamatan" class="form-control input-md" type="text">
      </div>
    </div>

    <legend>Data Pendukung Lainnya</legend>

    <div class="form-group">

      <!-- Penghasilan -->
      <label class="col-md-3 control-label" for="penghasilan">Penghasilan Orang Tua/Wali</label>
      <div class="col-sm-2">
        <input id="penghasilan" name="penghasilan" placeholder="Rp." class="form-control input-md" required="[0-9]+" type="number">
      </div>

      <!-- Status Tempat Tinggal -->
      <label class="col-md-3 control-label" for="stts_tinggal">Status Tempat Tinggal</label>
      <div class="col-sm-3">
        <select id="stts_tinggal" name="stts_tinggal" class="form-control input-md" required="">
          <option value="Menumpang">Menumpang</option>
          <option value="Sewa">Sewa</option>
          <option value="Hak milik">Hak milik</option>
        </select>
      </div>
    </div>
    
    <div class="form-group">

      <label class="col-md-3 control-label" for="HP_Telp">Nomor HP/Telp</label>
      <div class="col-sm-3">
        <input id="HP_Telp" name="HP_Telp" placeholder="08xxxxxxxxxx" class="form-control input-md" required="" type="text">
      </div>

    </div>

    <!-- tombol simpan -->
    <div class="form-group pull-right">
       <button type="submit" class="btn btn-primary">
          <i class="fa fa-btn fa-sign-in"></i> Simpan
       </button>
    </div>
</form>

@endsection

@section('script')

@endsection
