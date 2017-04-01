<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
	protected $table = 'dosen_matakuliah';
	public function jadwalmatakuliah()
	{
		return $this->hasMany(jadwalmatakuliah::class);
	}
	public function dosen()
	{
		return $this->belongsTo(dosen::class);
	}
	public function mahasiswa()
	{
		return $this->belongsTo(mahasiswa::class);
	}
}
