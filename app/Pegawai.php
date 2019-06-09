<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = ['nik','nama','tgl_lahir','tempat_lahir','jkel', 'agama_id', 'jabatan_id','alamat','telp'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    
    public function ibuhamil()
    {
        return $this->hasMany(Ibuhamil::class);
    }
}
