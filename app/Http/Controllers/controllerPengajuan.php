<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controllerPengajuan extends Controller
{
    public function index(){
    	return view('pengajuan');
    }

    public function pengajuanBaru(){
    	return view('pengajuanBaru');
    }

}
