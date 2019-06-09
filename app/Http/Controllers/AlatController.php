<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Alat;

class AlatController extends Controller
{
    public function index()
    {
        $data = Alat::all();
        return view('alat',compact('data'));
    }

    public function store(Request $req)
    {
        $cek = Alat::where('nama', $req->nama)->first();
        if($cek == null)
        {
            Alat::create($req->all());
            Alert::Success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'Alat Sudah Ada');
        }
        return back();
    }

    public function update(Request $req)
    {   
        $d = Alat::find($req->idedit);
        $d->fill($req->all());
        $d->save();
        Alert::Success('Muzakki', 'Berhasil DiUpdate');
        return back();
    }

    public function delete($id)
    {
        $d = Alat::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
