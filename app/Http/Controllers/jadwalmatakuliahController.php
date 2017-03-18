<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class jadwalmatakuliahController extends Controller
{
	public function awal()
	{
		return "halo dari jadwalmatakuliahController";

	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$jadwal_matakuliah = new jadwal_matakuliah();
		$jadwal_matakuliah->mahasiswa = '3';
		$jadwal_matakuliah->ruangan_id = '7';
		$jadwal_matakuliah->dosen_matakuliah = '4';
		$jadwal_matakuliah->save();
		return "data dengan nama : {$dosen->nama} telah disimpan";
	
    //
}
