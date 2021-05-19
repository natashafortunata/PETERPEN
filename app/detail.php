<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table = 'detil';
    protected $fillable =['kapasitas','linkTes','status','id_jadwal','id_tes'];

    public function jadwal(){
        return $this->hasMany('App\jadwal');
    }

    public function tes(){
        return $this->hasMany('App\tes');
    }    
}
