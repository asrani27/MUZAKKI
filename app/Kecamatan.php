<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    
    public function penyuluhan()
    {
        return $this->hasMany(Penyuluhan::class);
    }
}
