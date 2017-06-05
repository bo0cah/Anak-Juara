<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Pengajuan as Pengajuan;

class controllerPengajuan extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $pengajuan = Pengajuan::all();
    	//Halaman utama menampilkan Daftar pengajuan yang telah dirangking
        return view('pengajuan.index')->with('pengajuan',$pengajuan);
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

    //new tes simpan
    public function simpan(Request $request){

        $pengaju = new Pengajuan;

        //data ayah
        if ($request->input('Ayah_Serumah')) {
             $pengaju->Alamat_Ayah = $request->input('Alamat_Ayah');
        };

        //data ibu
        if ($request->input('Ibu_Serumah')) {
             $pengaju->Alamat_Ibu = $request->input('Alamat_Ibu');
        };

        //data wali
        if ($request->input('Wali_Serumah')) {
             $pengaju->Alamat_Wali = $request->input('Alamat_Wali');
        };

        //upload photo
        $pengaju->Photo = $request->input('Photo')-getClientOriginName();
        if ($request->hasFile('Photo')) {
            $fname = $request->input('Photo')-getClientOriginalName();
            $request->input('Photo')->move(base_path().'/public/photo/'.$fname.'.jpg');
        };

        $pengaju = $request->all();
        $pengaju->save();


        // return view('pengajuan.tambah');
    }



    // public function simpan(Request $request){

    //     $pengaju = new Pengajuan;
    //     $pengaju->NIK = $request->input('NIK');
    //     $pengaju->nama = $request->input('nama');
    //     $pengaju->kelamin = $this->kelamin[$request->input('kelamin')];
    //     $pengaju->tempat_lahir = $request->input('tempat_lahir');
    //     $pengaju->Tgl_Lahir = $request->input('Tgl_Lahir');
    //     $pengaju->Anak_Ke = $request->input('Anak_Ke');
    //     $pengaju->Jlh_Sdr = $request->input('Jlh_Sdr');
    //     $pengaju->Alamat_Anak = $request->input('Alamat_Anak')." ".
    //                             $request->input('RT_Anak')." ".
    //                             $request->input('RW_Anak')." ".
    //                             $request->input('Desa_Anak')." ".
    //                             $request->input('Kec_Anak');
    //     $pengaju->Wilayah_Pembinaan = $request->input('Wilayah_Pembinaan');
        
    //     $pengaju->Jenjang_Pendidikan = $this->pendidikan[$request->input('Jenjang_Pendidikan')];
    //     $pengaju->Kelas_Smt = $request->input('Kelas_Smt');
    //     $pengaju->Nilai_IPK = $request->input('Nilai_IPK');
    //     $pengaju->Nama_Sklh_Kampus = $request->input('Nama_Sklh_Kampus');
    //     $pengaju->Alamat_Sekolah = $request->input('Alamat_Sekolah');
        
    //     $pengaju->Keberadaan_Ortu = $stts_ortu[$request->input('Keberadaan_Ortu')];

    //     //data ayah
    //     $pengaju->Nama_Ayah = $request->input('Nama_Ayah');
    //     $pengaju->Pend_Ayah = $pendidikan[$request->input('Pend_Ayah')];
    //     if ($request->input('Ayah_Serumah')) {
    //          $pengaju->Alamat_Ayah = $pengaju->Alamat_Anak;
    //     } else {
    //         $pengaju->Alamat_Ayah = $request->input('Alamat_Ayah');
    //     }
    //     //data ibu
    //     $pengaju->Nama_Ibu = $request->input('Nama_Ibu');
    //     $pengaju->Pend_Ibu = $this->pendidikan[$request->input('Pend_Ibu')];
    //     if ($request->input('Ibu_Serumah')) {
    //          $pengaju->Alamat_Ibu = $pengaju->Alamat_Anak;
    //     } else {
    //         $pengaju->Alamat_Ibu = $request->input('Alamat_Ibu');
    //     }

    //     //data wali
    //     $pengaju->Nama_Wali = $request->input('Nama_Wali');
    //     $pengaju->Pend_Wali = $this->pendidikan[$request->input('Pend_Wali')];
    //     if ($request->input('Wali_Serumah')) {
    //          $pengaju->Alamat_Wali = $pengaju->Alamat_Anak;
    //     } else {
    //         $pengaju->Alamat_Wali = $request->input('Alamat_Wali');
    //     }

    //     //deskripsi diri pengaju
    //     $pengaju->Deskripsi_Diri = $request->input('Deskripsi_Diri');

    //     //upload photo
    //     $pengaju->Photo = $request->input('Photo')-getClientOriginalName();
    //     if ($request->hasFile('Photo')) {
    //         $fname = $request->input('Photo')-getClientOriginalName();
    //         $request->input('Photo')->move(base_path().'/public/photo/'.$fname.'.jpg');
    //     }
    //     $pengaju->save();


    //     // return view('pengajuan.tambah');
    // }

}
