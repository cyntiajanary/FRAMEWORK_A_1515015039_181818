<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class mahasiswacontroller extends Controller
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
		$mahasiswa = new Mahasiswa();
		$mahasiswa->nama = 'Cyntia';
		$mahasiswa->nim = '7646768632667';
		$mahasiswa->alamat = 'rumah';
		$mahasiswa->pengguna_id = '1';
		$mahasiswa->save ();
		return "data dengan nama : {$mahasiswa->nama} telah disimpan";

    //
}
}