<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    //
    protected $table = "theloai";
    protected $primarykey = 'id';
    protected $guarded = [];

    public function sanpham(){
        return $this->hasMany('App\sanpham','theloai','id');
    }
}
