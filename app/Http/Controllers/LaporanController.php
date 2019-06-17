<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class LaporanController extends Controller
{
    public function index()
    {
        $peserta = Peserta::all();
        return view('laporan',compact('peserta'));
    }
}
