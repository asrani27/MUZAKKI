<?php

use Illuminate\Database\Seeder;
use App\Agama;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new Agama;
        $d->nama = 'Islam';
        $d->save();

        $d = new Agama;
        $d->nama = 'Kriten';
        $d->save();
        
        $d = new Agama;
        $d->nama = 'Hindu';
        $d->save();
        
        $d = new Agama;
        $d->nama = 'Buddha';
        $d->save();
    }
}
