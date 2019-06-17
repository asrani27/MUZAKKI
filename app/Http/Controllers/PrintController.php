<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Peserta;
use App\Alat;
use App\Jenis;
use App\Ibuhamil;
use App\Transaksi;
use App\Bayi;
use App\Penyuluhan;
use App\Kecamatan;

class PrintController extends Controller
{
    public function pegawai()
    {
        $data = Pegawai::all();
        return view('print.print_pegawai',compact('data'));
    }
    public function peserta()
    {
        $data = Peserta::all();
        return view('print.print_peserta',compact('data'));
    }
    public function alat()
    {
        $data = Alat::all();
        return view('print.print_alat',compact('data'));
    }
    public function jenis()
    {
        $data = Jenis::all();
        return view('print.print_jenis',compact('data'));
    }
    public function ibuhamil()
    {
        $data = Ibuhamil::all();
        return view('print.print_ibuhamil',compact('data'));
    }
    public function transaksi()
    {
        $data = Transaksi::all();
        return view('print.print_transaksi',compact('data'));
    }
    public function bayilahir()
    {
        $data = Bayi::all();
        return view('print.print_bayilahir',compact('data'));
    }
    public function kartukb()
    {
        return view('print.pegawai');
    }
    public function penyuluhan()
    {
        $data = Penyuluhan::all();
        return view('print.print_penyuluhan',compact('data'));
    }
    public function pegawaikec()
    {
        $data = Penyuluhan::all();
        return view('print.print_kecamatan',compact('data'));
    }
    public function cetakkartu(Request $req)
    {
        //dd($req->all());
        $data = Peserta::find($req->peserta_id);
        return view('print.print_kartu',compact('data'));
    }
}
