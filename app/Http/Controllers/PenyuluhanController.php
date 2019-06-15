<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Kecamatan;
use App\Penyuluhan;
use Alert;
use Carbon\Carbon;

class PenyuluhanController extends Controller
{
    public function index()
    {
        $data = Penyuluhan::all();
        return view('penyuluhan.index',compact('data'));
    }

    public function add()
    {
        $kecamatan = Kecamatan::all();
        $pegawai = Pegawai::all();
        
        return view('penyuluhan.tambah',compact('kecamatan', 'pegawai'));
    }

    public function edit($id)
    {
        $data = Penyuluhan::find($id);
        $pegawai = Pegawai::all();
        $kecamatan = Kecamatan::all();
        return view('penyuluhan.edit',compact('data','pegawai','kecamatan'));
    }

    public function store(Request $req)
    {
        //dd($req->all());
            $s = new Penyuluhan;
            $s->pegawai_id     = $req->pegawai_id;
            $s->kecamatan_id   = $req->kecamatan_id;
            $s->tempat_tugas   = $req->tempat_tugas;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
      
        return redirect('/penyuluhan');
    }

    public function update(Request $req, $id)
    {
            $s = Penyuluhan::find($id);
            $s->pegawai_id     = $req->pegawai_id;
            $s->kecamatan_id   = $req->kecamatan_id;
            $s->tempat_tugas   = $req->tempat_tugas;
            $s->save();

            Alert::Success('Muzakki', 'Berhasil Di Update');
        
        return redirect('/penyuluhan');
    }
    
    public function delete($id)
    {
        $d = Penyuluhan::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
