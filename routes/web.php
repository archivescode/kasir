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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
	//route dashboard
    Route::get('/', 'DashboardController@index');
    //route group barang
    Route::prefix('barang')->group(function () {
	    Route::get('/', 'BarangController@index');
	    Route::get('/input', 'BarangController@add');
	});
	
});
