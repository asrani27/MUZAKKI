<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Peserta;
use App\Pegawai;
use App\Jenis;
use App\Alat;
use Alert;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Transaksi::all();
        return view('transaksi.index',compact('data'));
    }

    public function add()
    {
        $peserta = Peserta::all();
        $pegawai = Pegawai::all();
        $jenis = Jenis::all();
        $alat = alat::all();
        $data = Transaksi::all();
        $cek = count($data);
        if($cek == 0)
        {
            $no_kw = 1;
        }
        else {
            $no_kw = $data->last()->id + 1;
        }
        return view('transaksi.tambah',compact('peserta', 'pegawai', 'jenis', 'alat','no_kw'));
    }

    public function edit($id)
    {
        $data = Transaksi::find($id);
        $peserta = Peserta::all();
        $pegawai = Pegawai::all();
        $jenis = Jenis::all();
        $alat = alat::all();
        
        return view('transaksi.edit',compact('data','peserta', 'pegawai', 'jenis', 'alat'));
    }

    public function store(Request $req)
    {
        $cek = Transaksi::where('no_kw', $req->no_kw)->first();
        $tgl = Carbon::parse($req->tgl)->format('Y-m-d');
        if($cek == null)
        {
            $s = new Transaksi;
            $s->no_kw      = $req->no_kw;
            $s->tgl        = $tgl;
            $s->peserta_id = $req->peserta_id;
            $s->pegawai_id = $req->pegawai_id;
            $s->jenis_id   = $req->jenis_id;
            $s->alat_id    = $req->alat_id;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'No Transaksi Sudah Ada');
        }
        return redirect('/transaksi');
    }

    public function update(Request $req, $id)
    {
            $tgl = Carbon::parse($req->tgl)->format('Y-m-d');
        
            $s = Transaksi::find($id);
            $s->no_kw      = $req->no_kw;
            $s->tgl        = $tgl;
            $s->peserta_id = $req->peserta_id;
            $s->pegawai_id = $req->pegawai_id;
            $s->jenis_id   = $req->jenis_id;
            $s->alat_id    = $req->alat_id;
            $s->save();

            Alert::Success('Muzakki', 'Berhasil Di Update');
        
        return redirect('/transaksi');
    }
    
    public function delete($id)
    {
        $d = Transaksi::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
