<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use App\theloai;
use App\Helpers;
use App\sanpham;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    /**Show trang sản phẩm */
    public function getproduct(){
        return view('admin.product');
    }

    /**Show Trang Sửa Sản Phẩm Và Thêm Sản Phẩm */
    public function getaddproduct(){
        return view('admin.addproduct');
    }
    public function postaddproduct(){

    }

     /**Chỉnh sửa sản phẩm*/
    public function geteditproduct(){
        return view('admin.editproduct');
    }
    public function posteditproduct(){

    }


    /**Xóa sản phẩm sản phẩm*/
    public function getdeleteproduct(){
        
    }


}
