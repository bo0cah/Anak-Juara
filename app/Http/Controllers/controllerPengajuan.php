<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Pengajuan as Pengajuan;

class controllerPengajuan extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	//Halaman utama menampilkan Daftar pengajuan yang telah dirangking
        return view('pengajuan.index');
    }

    public function profil($id){
        
        //mencari data pengaju di database berdasarkan id
        $pangaju = Pengajuan::find($id);


        echo $pengaju->input('nama');
        // return view('pengajuan.profil');
    }

    public function form(){
    
        return view('pengajuan.form');
    }

    public function simpan(Request $request){

        $kelamin = array('Laki-Laki','Perempuan');
        $pendidikan = array('Tidak Sekolah', 'SD', 'SMP', 'SMA', 'Perguruan Tinggi');
        $stts_ortu = array('Lengkap', 'Piatu', 'Yatim', 'Yatim Piatu');

        $pengaju = new Pengajuan();
        $pengaju->NIK = $request->NIK;
        $pengaju->nama = $request->nama;
        $pengaju->kelamin = $request->kelamin;
        $pengaju->tempat_lahir = $request->tempat_lahir;
        $pengaju->Tgl_Lahir = $request->Tgl_Lahir;
        $pengaju->Anak_Ke = $request->Anak_Ke;
        $pengaju->Jlh_Sdr = $request->Jlh_Sdr;
        $pengaju->Alamat_Anak = $request->Alamat_Anak+$request->RT_Anak+$request->RW_Anak+$request->Desa_Anak+$request->Kec_Anak;
        $pengaju->Wilayah_Pembinaan = $request->Wilayah_Pembinaan;
        
        $pengaju->Jenjang_Pendidikan = $pendidikan($request->Jenjang_Pendidikan);
        $pengaju->Kelas_Smt = $request->Kelas_Smt;
        $pengaju->Nilai_IPK = $request->Nilai_IPK;
        $pengaju->Nama_Sklh_Kampus = $request->Nama_Sklh_Kampus;
        $pengaju->Alamat_Sekolah = $request->Alamat_Sekolah;
        
        $pengaju->Keberadaan_Ortu = $stts_ortu($request->Keberadaan_Ortu);

        //data ayah
        $pengaju->Nama_Ayah = $request->Nama_Ayah;
        $pengaju->Pend_Ayah = $pendidikan($request->Pend_Ayah);
        $pengaju->Ayah_Serumah = $request->Ayah_Serumah;
        if ($request->alamat_ayah_cek) {
             $pengaju->Alamat_Ayah = $request->Alamat_Anak+$request->RT_Anak+$request->RW_Anak+$request->Desa_Anak+$request->Kec_Anak;
        } else {
            $pengaju->Alamat_Ayah = $request->Alamat_Ayah;
        }
        //data ibu
        $pengaju->Nama_Ibu = $request->Nama_Ibu;
        $pengaju->Pend_Ibu = $pendidikan($request->Pend_Ibu);
        $pengaju->Ibu_Serumah = $request->Ibu_Serumah;
        if ($request->alamat_ibu_cek) {
             $pengaju->Alamat_Ibu = $request->Alamat_Anak+$request->RT_Anak+$request->RW_Anak+$request->Desa_Anak+$request->Kec_Anak;
        } else {
            $pengaju->Alamat_Ibu = $request->Alamat_Ibu;
        }

        //data wali
        $pengaju->Nama_Wali = $request->Nama_Wali;
        $pengaju->Pend_Wali = $request->Pend_Wali;
        $pengaju->Alamat_Wali = $request->Alamat_Wali;
        $pengaju->Wali_Serumah = $request->Wali_Serumah;
        if ($request->alamat_wali_cek) {
             $pengaju->Alamat_Ibu = $request->Alamat_Anak+$request->RT_Anak+$request->RW_Anak+$request->Desa_Anak+$request->Kec_Anak;
        } else {
            $pengaju->Alamat_Ibu = $request->Alamat_Wali;
        }

        //deskripsi diri pengaju
        $pengaju->Deskripsi_Diri = $request->Deskripsi_Diri;

        //pas photo
        $pengaju->Photo = $request->Photo;
        $pengaju->save();


        // return view('pengajuan.tambah');
    }

}
