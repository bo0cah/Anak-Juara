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

Route::get('/', function () {
    return view('pendaftaran');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/data_keluar', function () {
    return view('data_keluar');
});
Route::get('/penerima', function () {
    return view('penerima');
});