<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    
    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
    
}
