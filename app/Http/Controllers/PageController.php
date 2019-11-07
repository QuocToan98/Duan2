<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\sanpham;
use App\Http\Controllers\Redirect;
use Session;
use Auth;

class PageController extends Controller
{
    //

    public function lienhe(){
        return view('pages.lienhe');
    }

    public function gioithieu(){
        return view('pages.gioithieu');
    }

    public function chitietsanpham(Request $req){
        $sanphamchitiet =  sanpham::where('id',$req->id)->first();
        return view('pages.chitietsanpham',compact('sanphamchitiet'));
    }


    public function sanpham(){
        return view('pages.sanpham');
    }



    /** -------Đăng Ký------------- */
    public function dangky(){
        return view('pages.dangky');
    }

    public function postdangky(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password',
            ],
            [
                'email.required'=>'Vui Lòng nhập Email',
                'email.email'=>'không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống lắm',
                'password.min'=>'mật khẩu phải có ít nhất 6 ký tự'
            ]);
        $user = new User();
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect('dangnhap')->with('thanhcong','Đã tạo tài khoản thành công , Vui lòng đăng nhập');
    }



    /**  ----------Đăng nhập--------- */
    public function dangnhap(){
        return view('pages.dangnhap');
    }


    public function postdangnhap(Request $req){
        $this->validate($req,
        [
            'email'=>'required',
            'password'=>'required|min:6|max:20'
        ],
        [
           'email.required'=>'Vui lòng nhập email',
           'email.email'=>'Email không hợp lệ',
           'password.required'=>'Vui lòng nhập mật khẩu',
           'password.min'=>'Mật khẩu ít nhất 6 ký tự',
           'password.max'=>'mật khẩu không quá 20 ký tự', 
        ]
        
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect('/')->with(['flag'=>'succes','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect('dangnhap')->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }



    /**-------------Đăng Xuất------------- */

    public function getdangxuat(){
        Auth::logout();
        return redirect()->route('/');
    }


    /** Tìm Kiếm */
    public function getsearch(Request $req){
        $product = sanpham::where('name','like','%'.$req->key.'%')
                            ->orWhere('promotionprice',$req->key)
                            ->orWhere('price',$req->key)
                            ->get();
        return view('pages.search',compact('product'));
    }

}
