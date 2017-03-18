<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;
class penggunacontroller extends Controller
{
public function awal()
	{
		return "halo dari penggunacontroller";

	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$pengguna = new pengguna();
		$pengguna->username = 'jon_doe';
		$pengguna->username = 'doe_jon';
		$pengguna->save();
		return "data dengan username : {$pengguna->username} telah disimpan";
	}
    //
}
