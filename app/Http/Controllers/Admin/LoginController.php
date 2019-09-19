<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('/login');
    }

    public function postLogin(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($arr)){
            dd('dang nhap thanh cong');
        }else{
            dd('dang nhap sai');
        }
    }
}
