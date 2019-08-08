<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
use Auth;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::all();
        $cekData = count($data);
        return view('akun',compact('data','cekData'));
    } 

    public function store(Request $req)
    {
        $cek = User::where('username', $req->username)->first();
        if($cek == null)
        {
            $s = new User;
            $s->name     = $req->name;
            $s->username = $req->username;
            $s->email    = $req->username.'@gmail.com';
            $s->password = bcrypt($req->password);
            $s->save();
            
            Alert::success('Muzakki', 'Berhasil Disimpan');
        }
        else {
            Alert::error('Muzakki', 'Email Sudah Ada');
        }
        return back();
    }

    public function delete($id)
    {
        if($id == Auth::user()->id)
        {   
            Alert::error('Muzakki','Tidak Dapat Di Hapus, User Sedang Login');
        }
        else {
            $d = User::find($id);
            $d->delete();
            Alert::success('Muzakki','Berhasil Dihapus');
        }
        return back();
    }

    public function update(Request $req)
    {   
        $d = User::find($req->idedit);
        if($req->password == null)
        {
            $d->name = $req->name;
            $d->save();
        }
        else {
            $d->name = $req->name;
            $d->password = bcrypt($req->password);
            $d->save();
        }
        Alert::success('Muzakki', 'Berhasil DiUpdate');
        return back();
    }

}
