<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pengguna;

class detilController extends Controller
{
    //relasi dari tabel mana
    public function daftar(Request $request, $id){
        $jadwal = Jadwal::where('id', $id_jadwal)->first();

        //simpan database detil 
        $detil = new Detil;
        $detil->id_user = Auth::user()->id_user;
        $detil->id_jadwal = $jadwal;
        $detil->status = 0;
        $detil->save();
        return redirect('/user');
    }
}
