<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
	Protected $table = 'pengguna';
	protected $fillable=['username'.'password'];
	public function mahasiswa()
	{
		return $this->hasOne(mahasiswa::class);
	}
	public function dosen()
	{
		return $this->hasOne(dosen::class);
	}
	public function peran()
	{
		return $this->belongsToMany(peran::class);
	}
}
