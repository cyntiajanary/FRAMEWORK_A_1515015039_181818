<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class dosencontroller extends Controller
{
	public function awal()
	{
		return "halo";

	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = 'Cyntia';
		$dosen->nip = '7646768632667';
		$dosen->alamat = 'alam segar 4';
		$dosen->pengguna_id = '1';
		$dosen->save ();
		return "data dengan nama : {$dosen->nama} telah disimpan";
	}
    //
}
