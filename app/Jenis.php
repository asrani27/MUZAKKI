<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    
    protected $fillable = ['nama','harga'];
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
