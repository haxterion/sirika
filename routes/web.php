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

Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/supplier/tambah', 'SupplierController@tambah')->name('supplier');
Route::post('/supplier/store', 'SupplierController@store')->name('supplier');
Route::get('/supplier/edit/{id}','SupplierController@edit');
Route::post('/supplier/update', 'SupplierController@update')->name('supplier');
Route::get('/supplier/hapus/{id}','SupplierController@hapus');

Route::get('/pesanan', 'PesananController@index');
Route::get('/pesanan/beli/{id}', 'PesananController@beli');
Route::get('/pesanan/setuju/{id}', 'PesananController@setuju');
Route::post('/pesanan/update', 'PesananController@update')->name('ajaxupload.action');
Route::post('/pesanan/kirim', 'PesananController@kirim');
Route::get('/pesanan/print/{id}','PesananController@print');

Route::get('/bahanbaku', 'BahanbakuController@index')->name('bahanbaku');
Route::get('/bahanbaku/tambah', 'BahanbakuController@tambah')->name('bahanbaku');
Route::post('/bahanbaku/store', 'BahanbakuController@store')->name('bahanbaku');
Route::get('/bahanbaku/edit/{id}','BahanbakuController@edit');
Route::get('/bahanbaku/pesan/{id}','BahanbakuController@pesan');
Route::post('/bahanbaku/kirim', 'BahanbakuController@kirim');
Route::post('/bahanbaku/update', 'BahanbakuController@update')->name('bahanbaku');
Route::get('/bahanbaku/hapus/{id}','BahanbakuController@hapus');

Route::get('/pembelian', 'PembelianController@index')->name('pembelian');
Route::get('/pembelian/tambah', 'PembelianController@tambah')->name('pembelian');
Route::post('/pembelian/store', 'PembelianController@store')->name('pembelian');
Route::get('/pembelian/edit/{id}','PembelianController@edit');
Route::post('/pembelian/send','PembelianController@send');
Route::get('/pembelian/kirim/{id}','PembelianController@kirim');
Route::post('/pembelian/update', 'PembelianController@update')->name('pembelian');
Route::get('/pembelian/hapus/{id}','PembelianController@hapus');

Route::get('/lapbaku', 'LapbakuController@index')->name('lapbaku');
Route::get('/lapbaku/tambah', 'LapbakuController@tambah')->name('lapbaku');
Route::post('/lapbaku/store', 'LapbakuController@store')->name('lapbaku');
Route::get('/lapbaku/edit/{id}','LapbakuController@edit');
Route::post('/lapbaku/update', 'LapbakuController@update')->name('lapbaku');
Route::get('/lapbaku/hapus/{id}','LapbakuController@hapus');

Route::get('/pengiriman', 'PengirimanController@index');
Route::get('/pengiriman/track/{id}', 'PengirimanController@track');