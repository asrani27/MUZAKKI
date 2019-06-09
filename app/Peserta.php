<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    public function transaksi()
    {
    return $this->hasMany(Transaksi::class);
    }
}
