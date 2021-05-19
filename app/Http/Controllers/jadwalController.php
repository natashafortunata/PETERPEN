<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;

class jadwalController extends Controller
{
    public function viewJadwal(){
        return view('Jadwal.index');
    }

    public function viewInputJadwal(){
        return view('Jadwal.tambah');
    }
}
