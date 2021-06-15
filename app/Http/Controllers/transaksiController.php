<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
class transaksiController extends Controller
{
    public function indexTrx(){
        return view('user.pembayaran');
    }

    public function tambahTrx(Request $request){
        $request->validate([
            'pengirim'=>'required',
            'tgl_kirim'=>'required',
            'bank' =>'required',
            'total'=>'required',
            'file_bayar'=>'required|image|max:2048',
            'status'=> 0,
            'link_tes'=>0
        ]);
        $image_tes = $request->file('file_bayar');
        $gambar_baru = rand().'.'.$image_tes->getClientOriginalExtension();
        //biar gambar yg diunggah masuk ke file public-images, images itu folder baru untuk simpan data gambar otomatis terbuat
        $image_tes->move(public_path('images'),$gambar_baru); 
        //tambah data
        $insert_data = array(
            'pengirim'=>$request->pengirim,
            'tgl_kirim'=>$request->tgl_kirim,
            'bank'=>$request->bank,
            'total'=>$request->total,
            'file_bayar'=>$gambar_baru,
            'status'=>0,
            'link_tes'=>0
        );
        tes::create($insert_data);
        return redirect('/pembayaran')->with('sukses','Pembayaran berhasil!');
    }

}
