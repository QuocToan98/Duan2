<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class validationcontroller extends Controller
{
    //
    public function getvalidation(){
        return view('validation.validation');
    }

    public function postvalidation(LoginRequest $request){
        

    }
}
