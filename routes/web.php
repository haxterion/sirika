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

Route::get('/', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/supplier', 'SupplierController@index')->middleware('admin');
Route::get('/supplier/tambah', 'SupplierController@tambah')->middleware('admin');
Route::post('/supplier/store', 'SupplierController@store')->middleware('admin');
Route::get('/supplier/edit/{id}','SupplierController@edit')->middleware('admin');;
Route::post('/supplier/update', 'SupplierController@update')->middleware('admin');;
Route::get('/supplier/hapus/{id}','SupplierController@hapus')->middleware('admin');;

Route::get('/pesanan', 'PesananController@index')->middleware('admin');
Route::get('/pesanan/beli/{id}', 'PesananController@beli')->middleware('admin');
Route::get('/pesanan/setuju/{id}', 'PesananController@setuju')->middleware('admin');
Route::post('/pesanan/update', 'PesananController@update')->middleware('admin');
Route::post('/pesanan/kirim', 'PesananController@kirim')->middleware('admin');
Route::get('/pesanan/print/{id}','PesananController@print')->middleware('admin');

Route::get('/bahanbaku', 'BahanbakuController@index')->middleware('admin');
Route::get('/bahanbaku/tambah', 'BahanbakuController@tambah')->middleware('hanyaadmin');
Route::post('/bahanbaku/store', 'BahanbakuController@store')->middleware('admin');
Route::get('/bahanbaku/edit/{id}','BahanbakuController@edit')->middleware('admin');
Route::get('/bahanbaku/pesan/{id}','BahanbakuController@pesan')->middleware('admin');
Route::post('/bahanbaku/kirim', 'BahanbakuController@kirim')->middleware('admin');
Route::post('/bahanbaku/update', 'BahanbakuController@update')->middleware('admin');
Route::get('/bahanbaku/hapus/{id}','BahanbakuController@hapus')->middleware('admin');

Route::get('/pembelian', 'PembelianController@index')->middleware('supplier');
Route::get('/pembelian/tambah', 'PembelianController@tambah')->middleware('supplier');
Route::post('/pembelian/store', 'PembelianController@store')->middleware('supplier');
Route::get('/pembelian/edit/{id}','PembelianController@edit')->middleware('supplier');
Route::post('/pembelian/send','PembelianController@send')->middleware('supplier');
Route::get('/pembelian/kirim/{id}','PembelianController@kirim')->middleware('supplier');
Route::post('/pembelian/update', 'PembelianController@update')->middleware('supplier');
Route::get('/pembelian/hapus/{id}','PembelianController@hapus')->middleware('supplier');

Route::get('/lapbaku', 'LapbakuController@index')->name('lapbaku');
Route::get('/lapbaku/tambah', 'LapbakuController@tambah')->name('lapbaku');
Route::post('/lapbaku/store', 'LapbakuController@store')->name('lapbaku');
Route::get('/lapbaku/edit/{id}','LapbakuController@edit');
Route::post('/lapbaku/update', 'LapbakuController@update')->name('lapbaku');
Route::get('/lapbaku/hapus/{id}','LapbakuController@hapus');

Route::get('/pengiriman', 'PengirimanController@index')->middleware('admin');
Route::get('/pengiriman/track/{id}', 'PengirimanController@track')->middleware('hanyaadmin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
