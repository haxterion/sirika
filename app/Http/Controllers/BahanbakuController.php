<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BahanbakuController extends Controller
{
	public function __construct()
{
    $this->middleware('auth');    
    $this->middleware('role:admin');
}
	public function index()
    {
    	$bahanbaku = DB::select("select b.*,(select nama_sup from supplier where id_sup=b.id_sup) as nama_sup from bahanbaku b");
    	return view('bahanbaku.index',['bahanbaku' => $bahanbaku]);
 
    }

    public function tambah()
	{
 	$sup = DB::table('supplier')->get();
	// memanggil view tambah
	return view('bahanbaku.tambah',['sup'=>$sup]);
	}

	public function store(Request $request)
	{
	// insert data ke table supplier
	DB::table('bahanbaku')->insert([
		'id_sup' => $request->id_sup,
		'nama_baku' => $request->nama_baku,
		'stok' => $request->stok,
		'satuan' => "Meter3",
		'hrg_beli' => $request->hrg_beli,
	]);
	// alihkan halaman ke halaman supplier
	return redirect('/bahanbaku');
 
	}

	public function edit($id)
	{
	// mengambil data supplier berdasarkan id yang dipilih
	$sup = DB::table('supplier')->get();
	$bahanbaku = DB::table('bahanbaku')->where('id_baku',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('bahanbaku.edit')->with(compact('sup','bahanbaku'));
	}

	public function pesan($id)
	{
	// mengambil data supplier berdasarkan id yang dipilih
	$bahanbaku = DB::table('bahanbaku')->where('id_baku',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('bahanbaku.pesan',['bahanbaku'=>$bahanbaku]);
	}

	public function kirim(Request $request)
	{
	// insert data ke table supplier
	DB::table('pesanan')->insert([
		'id_baku' => $request->id_baku,
		'kuantitas' => $request->kuantitas,
		'status' => 0,
		'keterangan' => $request->keterangan,
	]);
	return redirect('/pesanan');
	}
	public function update(Request $request)
	{
	// update data pegawai
	DB::table('bahanbaku')->where('id_baku',$request->id)->update([
		'nama_baku' => $request->nama_baku,
		'stok' => $request->stok,
		'satuan' => $request->satuan,
		'hrg_beli' => $request->hrg_beli,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bahanbaku');
	}

	public function hapus($id)
{
	// menghapus data supir berdasarkan id yang dipilih
	DB::table('bahanbaku')->where('id_baku',$id)->delete();
		
	// alihkan halaman ke halaman supplier
	return redirect('/bahanbaku');
}
}
