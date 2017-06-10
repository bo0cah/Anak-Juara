<?php

namespace App\Http\Controllers;

// use App\Http\Requests;
use App\Pengajuan as Pengajuan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class controllerPengajuan extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $pengajuan = Pengajuan::all();
    	//Halaman utama menampilkan Daftar pengajuan yang telah dirangking
        return view('pengajuan.index')->with('pengajuan',$pengajuan);
    }

    public function profil($id)
    {
        
        //mencari data pengaju di database berdasarkan id
        $pengaju = Pengajuan::find($id);

        return $pengaju->nama;
        // return view('pengajuan.profil');
    }

    public function form()
    {   
        return view('pengajuan.form');
    }

    //new tes simpan
    public function simpan(Request $request)
    {
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

        $destination = base_path() . '/public/photo/';

        $request->file('Photo')->move($destination, $photo);

        $data['Photo'] = $photo;

        Pengajuan::create($data);
        return "data sukses disimpan";
    }

    public function unduhExcel($ext) //$ext variable pengatur Extensi file | csv xls xlsx
    {
        $data = Pengajuan::get()->toArray();
        $output = Excel::create('Rangking Pengajuan Beasiswa Ceria', function($excel) use ($data) 
                    {
                        $excel->sheet('Pengajuan', function($sheet) use ($data)
                            {
                                $sheet->fromArray($data);
                            });
                    })->download($ext);

        return $output;
    }

    public function unggahExcel(Request $request)
    {
        
        $file = $request->file('import_file');
        if(!empty($file))
        {
            $path = $file->getRealPath();
            $data = Excel::load($path, function($reader){ //callback is optional
            })->get();

            if(!empty($data) && $data->count())
            {
                foreach ($data as $key => $value)
                {
                    $insert[] = [
                        'created_at' => Carbon::now()->toDateTimeString(),
                        'updated_at' => Carbon::now()->toDateTimeString(),
                        'NIK' => $value->NIK,
                        'nama' => $value->nama,
                        'kelamin' => $value->kelamin,
                        'tempat_lahir' => $value->tempat_lahir,
                        'Tgl_Lahir' => $value->Tgl_Lahir,
                        'Anak_Ke' => $value->Anak_Ke,
                        'Jlh_Sdr' => $value->Jlh_Sdr,
                        'Alamat_Anak' => $value->Alamat_Anak,
                        'RT_Anak' => $value->RT_Anak,
                        'RW_Anak' => $value->RW_Anak,
                        'Desa_Anak' => $value->Desa_Anak,
                        'Kec_Anak' => $value->Kec_Anak,
                        'Deskripsi_Diri' => $value->Deskripsi_Diri,
                        'HP_Telp' => $value->HP_Telp,
                        'Photo' => $value->Photo,
                        'Wilayah_Pembinaan' => $value->Wilayah_Pembinaan,
                        'Jenjang_Pendidikan' => $value->Jenjang_Pendidikan,
                        'Kelas_Smt' => $value->Kelas_Smt,
                        'Nilai_IPK' => $value->Nilai_IPK,
                        'Nama_Sklh_Kampus' => $value->Nama_Sklh_Kampus,
                        'Alamat_Sekolah' => $value->Alamat_Sekolah,
                        'Keberadaan_Ortu' => $value->Keberadaan_Ortu,
                        'Nama_Ayah' => $value->Nama_Ayah,
                        'Pend_Ayah' => $value->Pend_Ayah,
                        'Alamat_Ayah' => $value->Alamat_Ayah,
                        'Nama_Ibu' => $value->Nama_Ibu,
                        'Pend_Ibu' => $value->Pend_Ibu,
                        'Alamat_Ibu' => $value->Alamat_Ibu,
                        'Nama_Wali' => $value->Nama_Wali,
                        'Pend_Wali' => $value->Pend_Wali,
                        'Alamat_Wali' => $value->Alamat_Wali,
                        'penghasilan' => $value->penghasilan,
                        'stts_tinggal' => $value->stts_tinggal
                    ];
                    // Pengajuan::create($insert);;
                }
                // if(!empty($insert)){
                //     dd('Insert Record successfully.');
                // }
            }
            // Pengajuan::create($data);
        }

        // $date = Carbon::now();
        // $dateFormat = Carbon::createFromFormat('dd-mm-YYYY', '1990-07-09')->toDateTimeString();

        return dd($data);

        // return Redirect::to('users/login')->with('message', Helper::format_message('Thanks for registering!','info'));
        // return Redirect::back()->with('message', Helper::format_message('Pengajuan berhasil di import.','info'));
    } //akhir dari unggahExcel

    public static function format_message($message,$type)
    
    {
         return '<p class="alert alert-'.$type.'">'.$message.'</p>';
    }
}
