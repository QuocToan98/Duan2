<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    //
    protected $table = "chitietdonhang";

    public function sanpham(){
        return $this->belongsTo('App\chitietdomhang','id_sanpham','id');
    }
}
