<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['pengirim','tgl_kirim','bank', 'total', 'file_bayar', 'status','link_tes','id_daftar'];
    protected $primaryKey = 'id_trx';

    //relasi dr tabel mana
    /*public function jadwal(){
        return $this->hasTo('App\jadwal');
    }

    public function pengguna(){
        return $this->hasTo('App\pengguna');
    }

    public function admin(){
        return $this->hasTo('App\admin');
    }*/
}
