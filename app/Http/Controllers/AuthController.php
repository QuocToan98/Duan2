<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use db;
use App\demo;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['name'=>$username, 'password'=>$password]))
           {
            return view('admin.dashboard',['user'=>Auth::demo()]);
           } 
        else
        {
            echo " <h3 class='title-alert' style='color:red;position: absolute;top: 23%;padding-left: 40%;'> Đăng nhập sai, vui lòng đăng nhập lại !</h3> " ;
            return view('login');
        }
            
    }
    
    public function logout(){
        Auth::logout();
        return view('login');
    }
}
