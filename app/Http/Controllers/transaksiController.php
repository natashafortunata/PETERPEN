<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\pendaftaran;
use App\tes;
use Auth;
class transaksiController extends Controller
{
    public function indexTrx(){
        return view('user.pembayaran');
    }

    public function viewInputTrx(){
        $auth = Auth::user()->id;
        $data_index= tes::where([
            ['id_tes', '=', $auth],
            ])->get();
        //$data_index = tes::all();
        return view('user.pembayaran',compact('data_index'));
    }

    public function tambahTrx(Request $request){
        $request->validate([
            'nama_rek'=>'required',
            'tgl_kirim'=>'required',
            'bank' =>'required',
            'total'=>'required',
            'file_bayar'=>'required|image|max:2048',
        ]);
        $image_tes = $request->file('file_bayar');
        $gambar_baru = rand().'.'.$image_tes->getClientOriginalExtension();
        //biar gambar yg diunggah masuk ke file public-images, images itu folder baru untuk simpan data gambar otomatis terbuat
        $image_tes->move(public_path('bukti_bayar'),$gambar_baru); 
        //tambah data
        $insert_data = array(
            'nama_rek'=>$request->pengirim,
            'tgl_kirim'=>$request->tgl_kirim,
            'bank'=>$request->bank,
            'total'=>$request->total,
            'file_bayar'=>$gambar_baru,
            

        );
        transaksi::create($insert_data);
        return redirect('/user')->with('Sukses','Pembayaran berhasil! Mohon menunggu konfirmasi dari Admin');
    }

}
