<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';

    protected $fillable = ['nama','jumlah'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
