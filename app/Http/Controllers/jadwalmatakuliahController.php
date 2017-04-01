<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalmatakuliah extends Model
{
	protected $table = 'jadwalmatakuliah';
	protected $fillable = ['mahasiswa_id','ruangan_id','dosenmatakuliah_id'];
	public function dosenmatakuliah()
{
	return $this->belongsTo(dosenmatakuliah::class);
}	
public function ruangan()
{
	return $this->belongsTo(ruangan::class);
}
public function mahasiswa()
{
	return $this->belongsTo(mahasiswa::class);
}
}