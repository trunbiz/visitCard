<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace'=>'Front'],function (){
    Route::get('/','indexController@indexShow');
});
Route::group(['namespace'=>'Admin'],function(){
   Route::group(['prefix'=>'admin'],function(){
      Route::get('/','indexController@indexShow');
   });
   Route::get('login','indexController@showLogin');
   Route::post('login','indexController@checkLogin');
   Route::get('register','indexController@showRegister');
   Route::post('register','indexController@register');
});
