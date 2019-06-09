<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agama;
use Alert;

class AgamaController extends Controller
{
    public function index()
    {
        $data = Agama::all();
        return view('agama',compact('data'));
    }

    public function store(Request $req)
    {
        $cek = Agama::where('nama', $req->nama)->first();
        if($cek == null)
        {
            $s = new Agama;
            $s->nama = $req->nama;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'Agama Sudah Ada');
        }
        return back();
    }

    public function update(Request $req)
    {   
        $d = Agama::find($req->idedit);
        $d->nama = $req->nama;
        $d->save();
        Alert::success('Muzakki', 'Berhasil DiUpdate');
        return back();
    }

    public function delete($id)
    {
        try {
            $d = Agama::find($id);
            $d->delete();
            Alert::success('Muzakki','Berhasil Dihapus');
            return back();
          } catch (\Exception $e) {
            Alert::error('Muzakki','Tidak Bisa Di Hapus Karena terkait dengan Pegawai Dan Peserta');
            return back();
        }
    }
}
