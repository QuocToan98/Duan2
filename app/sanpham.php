<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $table = "sanpham";

    public function theloai(){
        return $this->belongsTo('App\theloai','theloai','id');
    }

    public function chitietdonhang(){
        return $this->hasMany('App\chitietdomhang','id_sanpham','id');
    }
}
