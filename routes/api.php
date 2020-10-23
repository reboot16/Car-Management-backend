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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mobil','MobilController@index');
Route::post('mobil','MobilController@create');
Route::get('mobil/{id}','MobilController@show');
Route::put('mobil/{id}','MobilController@update');
Route::delete('mobil/{id}','MobilController@delete');

Route::get('penjualan','PenjualanController@index');
Route::post('penjualan','PenjualanController@create');
Route::get('penjualan/{id}','PenjualanController@show');
Route::put('penjualan/{id}','PenjualanController@update');
Route::delete('penjualan/{id}','PenjualanController@delete');

