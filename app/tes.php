<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tes extends Model
{
    protected $table= 'tes';
    protected $fillable =['namaTes','harga','keterangan'];

}
