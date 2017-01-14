<?php

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

Route::get('/',[
	'uses' => 'controllerPengajuan@index',
	'as' => 'pengajuan.index'
]);

Route::get('/pengajuan-baru',[
	'uses' => 'controllerPengajuan@pengajuanBaru',
	'as' => 'pengajuan.baru'
]);

Route::get('/login', function () {
    return view('pengguna/login');
});

Route::get('/akun', function () {
    return view('akun');
});

Route::get('/data-keluar', function () {
    return view('data-keluar');
});

Route::get('/penerima', function () {
    return view('penerima');
});

Route::get('/doc}', function () {
    return view('documentation/document');
});

/*Route::get('/{name?}', function ($name = '1') {
    return $name;
});*/
