<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibuhamil extends Model
{
    protected $table = 'ibuhamil';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
