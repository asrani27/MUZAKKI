<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Pegawai;
use App\Agama;
use App\Jabatan;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index',compact('data'));
    }

    public function add()
    {
        $agama = Agama::all();
        $jabatan = Jabatan::all();
        return view('pegawai.tambah',compact('agama','jabatan'));
    }

    public function store(Request $req)
    {
        $cek = Pegawai::where('nik', $req->nik)->first();
        if($cek == null)
        {
            $tgl_lahir = Carbon::parse($req->tgl_lahir)->format('Y-m-d');
            $s = new Pegawai;
            $s->nik          = $req->nik;
            $s->nama         = $req->nama;
            $s->tgl_lahir    = $tgl_lahir;
            $s->tempat_lahir = $req->tempat_lahir;
            $s->jkel         = $req->jkel;
            $s->agama_id     = $req->agama_id;
            $s->jabatan_id   = $req->jabatan_id;
            $s->alamat       = $req->alamat;
            $s->telp         = $req->telp;
            $s->save();
            Alert::Success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'Alat Sudah Ada');
        }
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $agama = Agama::all();
        $jabatan = Jabatan::all();
        $data = Pegawai::find($id);
        return view('pegawai.edit',compact('data','agama','jabatan'));
    }

    public function update(Request $req, $id)
    {
            $tgl_lahir = Carbon::parse($req->tgl_lahir)->format('Y-m-d');
            $s = Pegawai::find($id);
            $s->nik          = $req->nik;
            $s->nama         = $req->nama;
            $s->tgl_lahir    = $tgl_lahir;
            $s->tempat_lahir = $req->tempat_lahir;
            $s->jkel         = $req->jkel;
            $s->agama_id     = $req->agama_id;
            $s->jabatan_id   = $req->jabatan_id;
            $s->alamat       = $req->alamat;
            $s->telp         = $req->telp;
            $s->save();
            Alert::Success('Muzakki', 'Berhasil Di Update');
        
        return redirect('/pegawai');
    }
    
    public function delete($id)
    {
        $d = Pegawai::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
