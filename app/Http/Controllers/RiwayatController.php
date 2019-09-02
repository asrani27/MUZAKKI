<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Ibuhamil;

class RiwayatController extends Controller
{
    public function pasien()
    {
        $peserta = Peserta::all();
        $jmldata = 0;
        return view('riwayat.pasien',compact('peserta','jmldata'));
    }
    public function ibuhamil()
    {
        $ibuhamil = Ibuhamil::all();
        $jmldata = 0;
        return view('riwayat.ibuhamil',compact('ibuhamil','jmldata'));
    }

    public function cekpasien(Request $req)
    {
        $p = Peserta::find($req->peserta_id);
        $jmldata = count($p->transaksi);
        $data = $p->transaksi;
        $peserta = Peserta::all();
        return view('riwayat.pasien',compact('peserta','jmldata','data'));
    }

    public function cekibuhamil(Request $req)
    {
        $data = Ibuhamil::where('nik',$req->nik)->get();
        $jmldata = count($data);
        $ibuhamil = Ibuhamil::all();
        return view('riwayat.ibuhamil',compact('ibuhamil','jmldata','data'));
    }
}
