<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function(){
    
    Route::auth();
    
    Route::get('/',['uses' => 'controllerPengajuan@index','as' => 'pengajuan.index' ]);

    Route::get('pengajuan-form',['uses' => 'controllerPengajuan@form', 'as' => 'pengajuan-form' ]);

    Route::post('pengajuan-form',['uses' => 'controllerPengajuan@simpan','as' => 'pengajuan-simpan']);

    Route::get('profil/{id}',[ 'uses' => 'controllerPengajuan@profil', 'as' => 'profil']);

    Route::get('profil-keluar','controllerProfilKeluar@index');

    Route::get('penerima', 'controllerPenerima@index');

    Route::get('doc}', function () {
        return view('documentation/document');
    });

    Route::get('/home', 'HomeController@index');

    Route::get('/administrator', function () {
        echo '<h1>Hai '.Auth::user()->name;
    })->middleware('isAdmin');

    //testing route
    Route::get('importExport', 'MaatwebsiteDemoController@importExport');
    Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
    Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
    
});

Route::get('users/{id}', function ($id) {
    $user = App\Pengajuan::find("$id"); 
    echo $user->nama."<br>";
});
