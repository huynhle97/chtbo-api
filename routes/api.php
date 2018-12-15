<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('sanphams','SanPhamController@getAll');
Route::get('sanphams/{id}','SanPhamController@getById');


Route::post('sanphams/add','SanPhamController@add');

Route::delete('sanphams/{id}','SanPhamController@delete');

Route::put('sanphams/{id}','SanPhamController@edit');