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


class AdminController extends Controller
{
    //
    public function show_dashboard(){
        return view('admin.dashboard');
    }

    

    public function getcategory(){
        $data['catelist'] = theloai::all();
        return view('admin.category',$data);
    }
    public function postcategory(AddCateRequest $request){
        $category = new theloai;
        $category->name = $request->name;
        $category->description = '';
        $category->image = '';
        $category->slug = str_slug($request->name);
        $category->save();
        return back();
    }

    public function geteditcategory($id){
        $data['cate'] = theloai::find($id); 
        return view('admin.editcategory',$data);
    }
    public function posteditcategory(EditCateRequest $request,$id){
        $category = theloai::find($id);
        $category->name = $request->name;
        $category->description = '';
        $category->image = '';
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect()->intended('category');
    }

    public function getdeletecategory($id){
        theloai::destroy($id);
        return back();
    }

}
