<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demo extends Model
{
    //
    protected $table = "users";
    protected $fillable = [
        'email', 'password',
    ];
}
