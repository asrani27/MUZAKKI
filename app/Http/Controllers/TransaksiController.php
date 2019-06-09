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
}
