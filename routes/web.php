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




/*------- backend-----------*/
Route::get('/admin','Admincontroller@index');
Route::get('/dashboard','Admincontroller@show_dashboard');
Route::post('/admin-dashboard','Admincontroller@dashboard');
Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'login'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
});