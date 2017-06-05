<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    //definisikan nama table
    protected $table = 'Pengajuan';

    //definisikan primaryKey utk tabel
    protected $primaryKey = 'NIK';

    //to use a non-incrementing or a non-numeric primary key set to false
    public $incrementing = false;

    //pemformatan pada tanggal
    protected $dateFormat = 'd-m-Y H:i:s';

    //data yg boleh diisi
    protected $fillable = [
    	'NIK',
		'nama',
		'kelamin',
		'tempat_lahir',
		'Tgl_Lahir',
		'Anak_Ke',
		'Jlh_Sdr',
		'Alamat_Anak',
		'RT_Anak',
		'RW_Anak',
		'Desa_Anak',
		'Kec_Anak',
		'Deskripsi_Diri',
		'HP_Telp',
		'Photo',
		'Wilayah_Pembinaan',
		'Jenjang_Pendidikan',
		'Kelas_Smt',
		'Nilai_IPK',
		'Nama_Sklh_Kampus',
		'Alamat_Sekolah',
		'Keberadaan_Ortu',
		'Nama_Ayah',
		'Pend_Ayah',
		'Alamat_Ayah',
		'Nama_Ibu',
		'Pend_Ibu',
		'Alamat_Ibu',
		'Nama_Wali',
		'Pend_Wali',
		'Alamat_Wali',
		'penghasilan',
		'stts_tinggal'
    ];

    
}
