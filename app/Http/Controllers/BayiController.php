<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;
use App\Bayi;

class BayiController extends Controller
{
    public function index()
    {
        $data = Bayi::all();
        return view('bayi.index',compact('data'));
    }

    public function add()
    {
        return view('bayi.tambah');
    }

    public function edit($id)
    {
        $data = Bayi::find($id);
        
        return view('bayi.edit',compact('data'));
    }

    public function store(Request $req)
    {
        $tgl = Carbon::parse($req->tgl_lahir)->format('Y-m-d');

            $s                  = new Bayi;
            $s->tanggal         = $tgl;
            $s->hari            = $req->hari;
            $s->waktu           = $req->waktu;
            $s->tempat          = $req->tempat;
            $s->jkel            = $req->jkel;
            $s->anak_ke         = $req->anak_ke;
            $s->jenis_lahir     = $req->jenis_lahir;
            $s->kewarganegaraan = $req->kewarganegaraan;
            $s->nik_ibu         = $req->nik_ibu;
            $s->nama_ibu        = $req->nama_ibu;
            $s->save();
            Alert::success('Muzakki', 'Berhasil Disimpan');
     
            return redirect('/bayi');
    }

    public function update(Request $req, $id)
    {
            $tgl = Carbon::parse($req->tgl_lahir)->format('Y-m-d');
            //dd($tgl);
            $s = Bayi::find($id);
            $s->tanggal         = $tgl;
            $s->hari            = $req->hari;
            $s->waktu           = $req->waktu;
            $s->tempat          = $req->tempat;
            $s->jkel            = $req->jkel;
            $s->anak_ke         = $req->anak_ke;
            $s->jenis_lahir     = $req->jenis_lahir;
            $s->kewarganegaraan = $req->kewarganegaraan;
            $s->nik_ibu         = $req->nik_ibu;
            $s->nama_ibu        = $req->nama_ibu;
            $s->save();

            Alert::Success('Muzakki', 'Berhasil Di Update');
        
        return redirect('/bayi');
    }
    
    public function delete($id)
    {
        $d = Bayi::find($id);
        $d->delete();
        Alert::success('Muzakki','Berhasil Dihapus');
        return back();
    }
}
