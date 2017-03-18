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
    return view('welcome');
});
Route::get('/public', function () {
    return view('halo');
});
//Route::get('/pengguna/{pengguna}', function ($pengguna) {
  //  return "Hallo world dari pengguna $pengguna";
//});

Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');


Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah','penggunacontroller@tambah');


Route::get('dosenmatakuliah','dosenmatakuliahcontroller@awal');
Route::get('dosenmatakuliah/tambah','dosenmatakuliah@tambah');


Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');


Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');


Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal');
Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahcontroller@tambah');