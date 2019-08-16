<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';

    protected $fillable = ['nama','jumlah','jenis_id','satuan','pt'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
}
