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

Route::get('chitietsanpham',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@chitietsanpham',

]);

Route::get('sanpham',[
    'as'=>'sanpham',
    'uses'=>'PageController@sanpham',

]);
Route::get('gioithieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@gioithieu',

]);

/**SEARCH */
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getsearch',
]);






/*------- backend-----------*/
Route::get('/admin','Admincontroller@index');
Route::get('/dashboard','Admincontroller@show_dashboard');
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
Route::get('product',[
    'as'=>'product',
    'uses'=>'AdminController@getproduct'
]);

