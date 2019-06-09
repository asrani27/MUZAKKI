<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public function peserta()
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function pegawai()
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function jenis()
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function alat()
    {
        return $this->belongsTo(Transaksi::class);
    }
    
}
