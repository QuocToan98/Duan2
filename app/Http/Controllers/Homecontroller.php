<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\sanpham;

class Homecontroller extends Controller
{
    //
    public function index(){
        $new_sanpham = sanpham::where('new',1)->get();
        return view('pages.home',compact('new_sanpham'));
      
   } 
}
