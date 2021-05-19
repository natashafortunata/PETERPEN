<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tes;

class tesController extends Controller
{
    public function viewTes(){
        return view('Tes.index');
    }

    public function viewInputTes(){
        return view('Tes.tambah');
    }
}
