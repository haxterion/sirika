<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
    	$supplier = DB::table('supplier')->get();
    	return view('supplier.index',['supplier' => $supplier]);
 
    }

    public function tambah()
	{
 
	// memanggil view tambah
	return view('supplier.tambah');
 
	}

    public function store(Request $request)
	{
	// insert data ke table supplier
	DB::table('supplier')->insert([
		'id_user' => '1',
		'nama_sup' => $request->nama_sup,
		'alamat' => $request->alamat,
		'no_hp' => $request->no_hp,
	]);
	// alihkan halaman ke halaman supplier
	return redirect('/supplier');
 
	}

	public function edit($id)
	{
	// mengambil data supplier berdasarkan id yang dipilih
	$supplier = DB::table('supplier')->where('id_sup',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('supplier.edit',['supplier' => $supplier]);
	}

	public function update(Request $request)
	{
	// update data pegawai
	DB::table('supplier')->where('id_sup',$request->id)->update([
		'nama_sup' => $request->nama_sup,
		'no_hp' => $request->no_hp,
		'alamat' => $request->alamat,
		'id_user' => '1'
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/supplier');
	}

	public function hapus($id)
{
	// menghapus data supir berdasarkan id yang dipilih
	DB::table('supplier')->where('id_sup',$id)->delete();
		
	// alihkan halaman ke halaman supplier
	return redirect('/supplier');
}
}
