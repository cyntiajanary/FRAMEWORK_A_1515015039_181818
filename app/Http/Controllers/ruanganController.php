<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
class ruanganController extends Controller
{
	public function awal()
	{
		return "halo dari ruanganController";

	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$ruangan = new ruangan();
		$ruangan->tittle = 'ruangan 405';
		$ruangan->save;
		return "data ruangan dengan tittle : {$ruangan->tittle} telah disimpan";
	}
    //
}
