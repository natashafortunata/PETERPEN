<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use App\pendaftaran;
use DB;

class VerifController extends Controller
{
    public function verJadwal(){
        $verif = pendaftaran::all();
        //$verif= DB::table('jadwal')->join('pendaftaran','jadwal.id_jadwal','=','pendaftaran.id_daftar')->get();
        return view('verifikasi.verJadwal',compact('verif'));
    }

    public function verifikasiTenan(Request $req){
        pendaftaran::where('id_daftar', $req->get('id_daftar'))->update(['status' => $req->get('status')]);
        return redirect('/verJadwal');
    }






    public function verBayar(){
        return view('verifikasi.verBayar');
    }
}
