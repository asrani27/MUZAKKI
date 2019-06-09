<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;
use App\Ibuhamil;
use App\Pegawai;

class IbuhamilController extends Controller
{
    public function index()
    {
        $data = Ibuhamil::all();
        return view('ibuhamil.index',compact('data'));
    }

    public function add()
    {
        $pegawai = Pegawai::all();

        return view('ibuhamil.tambah',compact('pegawai'));
    }

    public function edit($id)
    {
        $data = Ibuhamil::find($id);
        $pegawai = Pegawai::all();
        
        return view('ibuhamil.edit',compact('data','pegawai'));
    }

    public function store(Request $req)
    {
        $tgl = Carbon::parse($req->tgl_lahir)->format('Y-m-d');

            $s                  = new Ibuhamil;
            $s->nik             = $req->nik;
            $s->nama            = $req->nama;
            $s->tgl_lahir       = $tgl;
            $s->kewarganegaraan = $req->kewarganegaraan;
            $s->alamat          = $req->alamat;
            $s->pekerjaan       = $req->pekerjaan;
            $s->pegawai_id      = $req->pegawai_id;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
     
            return redirect('/ibuhamil');
    }

    public function update(Request $req, $id)
    {
            $tgl = Carbon::parse($req->tgl_lahir)->format('Y-m-d');
        
            $s = Ibuhamil::find($id);
            $s->nik             = $req->nik;
            $s->nama            = $req->nama;
            $s->tgl_lahir       = $tgl;
            $s->kewarganegaraan = $req->kewarganegaraan;
            $s->alamat          = $req->alamat;
            $s->pekerjaan       = $req->pekerjaan;
            $s->pegawai_id      = $req->pegawai_id;
            $s->save();

            Alert::Success('Muzakki', 'Berhasil Di Update');
        
        return redirect('/ibuhamil');
    }
    
    public function delete($id)
    {
        $d = Ibuhamil::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
