<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function view(){
        return view('Layout.layout');
    }

    public function login(){
        return view('Layout.login');
    }
}
