<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use Alert;


class KecamatanController extends Controller
{ 
    public function index()
    {
        $data = Kecamatan::all();
        return view('kecamatan',compact('data'));
    }

    public function store(Request $req)
    {
        $cek = Kecamatan::where('nama', $req->nama)->first();
        if($cek == null)
        {
            $s = new Kecamatan;
            $s->nama = $req->nama;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'kecamatan Sudah Ada');
        }
        return back();
    }

    public function update(Request $req)
    {   
        $d = Kecamatan::find($req->idedit);
        $d->nama = $req->nama;
        $d->save();
        Alert::success('Muzakki', 'Berhasil DiUpdate');
        return back();
    }

    public function delete($id)
    {
        try {
            $d = Kecamatan::find($id);
            $d->delete();
            Alert::success('Muzakki','Berhasil Dihapus');
            return back();
          } catch (\Exception $e) {
            Alert::error('Muzakki','Tidak Bisa Di Hapus Karena terkait dengan Pegawai Dan Peserta');
            return back();
        }
    }
}
