<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class Admincontroller extends Controller
{
    //
    public function index(){
        return view('/login');
    }

    public function show_dashboard(){
        return view('/admin.dashboard');
    }

    public function dashboard(Request $request){
        $email = $request->email;
        $password = md5($request->password);

        $result = DB::table('tbl_admin')->where('email',$email)->where('password',$password)->first();
        return view('admin.dashboard');
        }
    }
