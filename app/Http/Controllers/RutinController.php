<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Transaksi;

class RutinController extends Controller
{
    public function index()
    {
        $peserta = Peserta::all();
        $data = $peserta->map(function($item){
            $item->jan = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','01')->get());
            $item->feb = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','02')->get());
            $item->mar = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','03')->get());
            $item->apr = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','04')->get());
            $item->may = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','05')->get());
            $item->jun = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','06')->get());
            $item->jul = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','07')->get());
            $item->aug = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','08')->get());
            $item->sep = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','09')->get());
            $item->okt = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','10')->get());
            $item->nov = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','11')->get());
            $item->des = count(Transaksi::where('peserta_id', $item->id)->whereMonth('tgl','12')->get());
            $item->cekstatus = $item->transaksi;
            if(count($item->cekstatus)==0)
            {
                $item->status = 'Tidak Rutin';
            }
            else {
                $item->status = 'Rutin';
            }
            return $item;
        });
        return view('rutin',compact('data'));
    }
}
