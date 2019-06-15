<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyuluhan extends Model
{
    protected $table  = 'penyuluhan';
    
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}

