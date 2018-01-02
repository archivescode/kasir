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
	return view('admin.dashboard');
});

Route::prefix('admin')->group(function () {
	//route dashboard
	Route::get('/', 'DashboardController@index');
	Route::get('/template', function () {
		return view('admin.template');
	});
    //route group barang
	Route::prefix('barang')->group(function () {
		Route::get('/', 'BarangController@index');
		Route::get('/input', 'BarangController@add');
		Route::prefix('kategori')->group(function () {
			Route::get('/', 'KategoriController@index');
			/**
			 * raote untuk kategori 1
			 */
			Route::get('/kategori1', 'KategoriController@kategori1');
			Route::post('/kategori1', 'KategoriController@kategori1Store');
			Route::post('/kategori1/delete', 'KategoriController@kategori1Delete');
			Route::get('/kategori1/{id}', 'KategoriController@kategori1Edit');
			Route::post('/kategori1/edit', 'KategoriController@kategori1Update');
			/**
			 * route untuk kategori 2
			 */
			Route::get('/kategori2', 'KategoriController@kategori2');
			Route::post('/kategori2', 'KategoriController@kategori2Store');
			Route::post('/kategori2/delete', 'KategoriController@kategori2Delete');
			Route::get('/kategori2/{id}', 'KategoriController@kategori2Edit');
			Route::post('/kategori2/edit', 'KategoriController@kategori2Update');
			/**
			 * route untuk kategori 3
			 */
			Route::get('/kategori3', 'KategoriController@kategori3');
			Route::post('/kategori3', 'KategoriController@kategori3Store');
			Route::post('/kategori3/delete', 'KategoriController@kategori3Delete');
			Route::get('/kategori3/{id}', 'KategoriController@kategori3Edit');
			Route::post('/kategori3/edit', 'KategoriController@kategori3Update');
		});
	});

	//route group todo
	Route::prefix('todo')->group(function () {
		Route::post('/store', 'TodoController@store');
		Route::post('/edit', 'TodoController@edit');
	});
	
});
