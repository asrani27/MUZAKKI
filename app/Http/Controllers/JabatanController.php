<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::all();
        return view('jabatan',compact('data'));
    }

    public function store(Request $req)
    {
        $cek = Jabatan::where('nama', $req->nama)->first();
        if($cek == null)
        {
            $s = new Jabatan;
            $s->nama = $req->nama;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'Jabatan Sudah Ada');
        }
        return back();
    }

    public function update(Request $req)
    {   
        $d = Jabatan::find($req->idedit);
        $d->nama = $req->nama;
        $d->save();
        Alert::success('Muzakki', 'Berhasil DiUpdate');
        return back();
    }

    public function delete($id)
    {
        try{
            $d = Jabatan::find($id);
            $d->delete();
            Alert::success('Muzakki','Berhasil Dihapus');
            return back();
        } catch (\Exception $e) {
            Alert::error('Muzakki','Tidak Bisa Di Hapus Karena terkait dengan Pegawai');
            return back();
        }
    }
}
