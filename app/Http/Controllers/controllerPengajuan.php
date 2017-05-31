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
    	$data = array('lk' => 'Laki-Laki','pr' => 'Perempuan'
        );
        return view('pengajuan.form', $data);
    }

    public function simpan(Request $request){

        echo "<h1>Berhasil</h1>";
        echo "<h2>".$request->input('nama')."</h2>";



        // return view('pengajuan.tambah');
    }

}
