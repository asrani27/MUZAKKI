<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agama;
use Alert;
use Carbon\Carbon;
use App\Peserta;

class PesertaController extends Controller
{
    public function index()
    {
        $data = Peserta::all();
        return view('peserta.index',compact('data'));
    }

    public function add()
    {
        $agama = Agama::all();
        return view('peserta.tambah',compact('agama'));
    }

    public function store(Request $req)
    {
            $tgl_lahir = Carbon::parse($req->tgl_lahir)->format('Y-m-d');
            $tgl_daftar = Carbon::parse($req->tgl_daftar)->format('Y-m-d');
            
            $s = new Peserta;
            $s->nama_peserta   = $req->nama_peserta;
            $s->nama_pasangan  = $req->nama_pasangan;
            $s->tgl_lahir      = $tgl_lahir;
            $s->tempat_lahir   = $req->tempat_lahir;
            $s->jkel           = $req->jkel;
            $s->agama_id       = $req->agama_id;
            $s->umur           = $req->umur;
            $s->alamat         = $req->alamat;
            $s->tgl_daftar     = $tgl_daftar;
            $s->save();

            Alert::Success('Muzakki', 'Berhasil Disimpan');
       
        return redirect('/peserta');
    }

    public function edit($id)
    {
        $agama = Agama::all();
        $data = Peserta::find($id);
        return view('peserta.edit',compact('data','agama'));
    }

    public function update(Request $req, $id)
    {
        $tgl_lahir = Carbon::parse($req->tgl_lahir)->format('Y-m-d');
        $tgl_daftar = Carbon::parse($req->tgl_daftar)->format('Y-m-d');
            $s = Peserta::find($id);
            $s->nama_peserta   = $req->nama_peserta;
            $s->nama_pasangan  = $req->nama_pasangan;
            $s->tgl_lahir      = $tgl_lahir;
            $s->tempat_lahir   = $req->tempat_lahir;
            $s->jkel           = $req->jkel;
            $s->agama_id       = $req->agama_id;
            $s->umur           = $req->umur;
            $s->alamat         = $req->alamat;
            $s->tgl_daftar     = $tgl_daftar;
            $s->save();

            Alert::Success('Muzakki', 'Berhasil Di Update');
        
        return redirect('/peserta');
    }
    
    public function delete($id)
    {
        try{
            $d = Peserta::find($id);
            $d->delete();
            Alert::success('Muzakki','Berhasil Dihapus');
            return back();
        } catch (\Exception $e) {
            Alert::error('Muzakki','Tidak Bisa Di Hapus Karena terkait dengan Transaksi');
            return back();
        }
    }
}
