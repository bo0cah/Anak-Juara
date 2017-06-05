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

        $data = $request->all();
        $AlamatAnak = $data['Alamat_Anak'].' RT-'.$data['RT_Anak'].' RW-'.$data['RW_Anak'].' Desa/Kel. '.$data['Desa_Anak'].' Kec. '.$data['Kec_Anak'];

        //data ayah
        if ($request->input('Ayah_Serumah')) {
             $data['Alamat_Ayah'] = $AlamatAnak;
        };

        //data ibu
        if ($request->input('Ibu_Serumah')) {
             $data['Alamat_Ibu'] = $AlamatAnak;
        };

        //data wali
        if ($request->input('Wali_Serumah')) {
             $data['Alamat_Wali'] = $AlamatAnak;
        };

        //upload photo
        $photo = $request->file('Photo')->getClientOriginalName();

        $destination = base_path() . '/public//';

        $request->file('Photo')->move($destination, $photo);

        $data['Photo'] = $photo;

        Pengajuan::create($data);

        return "sukses tersimpan.";

        // return view('pengajuan.tambah');
    }

}
