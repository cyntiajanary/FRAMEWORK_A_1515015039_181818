<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah
class matakuliahController extends Controller
{
	public function awal()
	{
		return "halo dari matakuliahController";

	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->tittle = 'framework';
		$matakuliah->keterangan = 'penuh';
		$matakuliah->save ();
		return "data matakuliah dnegan tittle : {$matakuliah->tittle} telah disimpan";
	
    //
}
