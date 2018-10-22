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

Route::get('/',"UserController@index");


Route::any("user.index","UserController@index")->name("user.index");
Route::any("user.add","UserController@add")->name("user.add");
Route::any("user/edit/{id}","UserController@edit")->name('user.edit');
Route::get("user/del/{id}","UserController@del")->name('user.del');