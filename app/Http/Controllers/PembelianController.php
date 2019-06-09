<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
	public function __construct()
{
    $this->middleware('auth');    
    $this->middleware('role:supplier');
}
	public function index()
    {
    $pemb = DB::table('pembelian')
    		->select('pembelian.*', 'bahanbaku.*')
            ->join('bahanbaku', 'pembelian.id_baku', '=', 'bahanbaku.id_baku')
            ->orderBy('id_pemb','desc')
            ->get();
    	return view('pembelian.index',['pemb' => $pemb]);
    }

    public function tambah()
	{
 	$bahanbaku = DB::table('bahanbaku')->get();
	// memanggil view tambah
	return view('pembelian.tambah',['bahanbaku'=>$bahanbaku]);
	}

	public function store(Request $request)
	{
	// insert data ke table supplier
	DB::table('pembelian')->insert([
		'id_baku' => $request->id_baku,
		'kuantitas' => $request->kuantitas,
	]);
	// alihkan halaman ke halaman supplier
	return redirect('/pembelian');
 
	}

	public function edit($id)
	{
	// mengambil data supplier berdasarkan id yang dipilih
	$bahanbaku = DB::table('bahanbaku')->get();
	$pemb = DB::table('pembelian')->where('id_pemb',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pembelian.edit')->with(compact('pemb','bahanbaku'));
	}

	public function kirim($id)
	{
	// mengambil data supplier berdasarkan id yang dipilih
	$pembelian = DB::table('pembelian')
    		->select('pembelian.*', 'bahanbaku.*')
            ->join('bahanbaku', 'pembelian.id_baku', '=', 'bahanbaku.id_baku')
           	->where('id_pemb',$id)
           	->orderBy('id_pemb','desc')
            ->get();
	$sup = DB::table('supplier')->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pembelian.kirim')->with(compact('pembelian','sup'));
	}

	public function send(Request $request)
	{
	// insert data ke table supplier
	DB::table('pengiriman')->insert([
		'id_pemb' => $request->id_pemb,
		'tgl_transaksi' => date('Y-m-d H:i:s'),
		'operator' => $request->operator,
		'supplier' => $request->supplier
	]);
	// alihkan halaman ke halaman supplier
	return redirect('/pengiriman');
 
	}

	public function update(Request $request)
	{
	// update data pegawai
		$tgl = date('Y-m-d H:i:s');
	DB::table('pembelian')->where('id_pemb',$request->id)->update([
		'id_baku' => $request->id_baku,
		'status_pembayaran' => $request->status_pembayaran,
		'tgl_transaksi' => $tgl,
		'kuantitas' => $request->kuantitas,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pembelian');
	}

	public function hapus($id)
	{
	// menghapus data supir berdasarkan id yang dipilih
	DB::table('pembelian')->where('id_pemb',$id)->delete();
		
	// alihkan halaman ke halaman supplier
	return redirect('/pembelian');
	}
}
