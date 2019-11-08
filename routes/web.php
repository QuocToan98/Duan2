<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*------- fronend-----------*/
Route::get('/', 'Homecontroller@index');
Route::get('/trang-chu','Homecontroller@index');
Route::get('/',[
    'as'=>'/',
    'uses'=>'HomeController@index',

]);

Route::get('lienhe',[
    'as'=>'lienhe',
    'uses'=>'PageController@lienhe',

]);

Route::get('chitietsanpham/{id}','PageController@chitietsanpham');
Route::get('sanpham/{$type}','PageController@sanpham');
Route::get('gioithieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@gioithieu',

]);

Route::get('themgiohang/{id}','PageController@getthemgiohang');

/**SEARCH */
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getsearch',
]);






/*------- backend-----------*/
Route::get('/register' ,'RegisterController@getregister');
Route::post('/register','RegisterController@postregister' );
Route::get('login', function(){
    return view('login');
});
Route::post('login','AuthController@login')->name('login');
Route::get('logout','AuthControoler@logout');


/** validateform */
Route::get('validation','validationcontroller@getvalidation');
Route::post('validation','validationcontroller@postvalidation');


/**  User */
Route::get('dangnhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@dangnhap'
]);

Route::get('dangky',[
    'as'=>'dangky',
    'uses'=>'PageController@dangky'
]);

Route::post('dangky',[
    'as'=>'dangky',
    'uses'=>'PageController@postdangky'
]);

Route::post('dangnhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@postdangnhap'
]);

Route::get('dangxuat',[
    'as'=>'dangxuat',
    'uses'=>'PageController@getdangxuat'
]);



/** PAGE ADMIN */
Route::get('dashboard',[
    'as'=>'dashboard',
    'uses'=>'AdminController@show_dashboard'
]);

/** SẢN PHẨM */
Route::get('product','ProductController@getproduct');
Route::get('addproduct','ProductController@getaddproduct');
Route::post('addproduct','ProductController@postaddproduct');
Route::get('editproduct','ProductController@geteditproduct');
Route::post('editproduct/{id}','ProductController@posteditproduct');
Route::get('deleteproduct/{id}','ProductController@getdeleteproduct');


/**DANH MỤC */
 Route::get('category','AdminController@getcategory');
 Route::post('category','AdminController@postcategory');

Route::get('deletecategory/{id}','AdminController@getdeletecategory');
Route::get('editcategory/{id}','AdminController@geteditcategory');
Route::post('editcategory/{id}','AdminController@posteditcategory');



