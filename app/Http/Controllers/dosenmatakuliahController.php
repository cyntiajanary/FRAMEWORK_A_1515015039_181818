<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App/dosenmatakuliah
class dosenmatakuliahController extends Controller
{
	public function awal()
	{
		return "halo dari dosenmatakuliahController";

	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosenmatakuliah = new dosenmatakuliah();
		$dosenmatakuliah->dosen_id = '2';
		$dosenmatakuliah->matakuliah_id = '1';
		$dosenmatakuliah->save();
		return "data dengan nama : {$dosen->nama} telah disimpan";
	
    //
}
