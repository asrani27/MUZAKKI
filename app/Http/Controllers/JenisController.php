<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Jenis;

class JenisController extends Controller
{
    public function index()
    {
        $data = Jenis::all();
        return view('jenis',compact('data'));
    }

    public function store(Request $req)
    {
        $cek = Jenis::where('nama', $req->nama)->first();
        if($cek == null)
        {
            Jenis::create($req->all());
            Alert::Success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'Jenis Sudah Ada');
        }
        return back();
    }

    public function update(Request $req)
    {   
        $d = Jenis::find($req->idedit);
        $d->fill($req->all());
        $d->save();
        Alert::Success('Muzakki', 'Berhasil DiUpdate');
        return back();
    }

    public function delete($id)
    {
        $d = Jenis::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
