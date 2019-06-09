<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use PDF;

class PesananController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');    
    $this->middleware('role:admin');
    }
    public function index()
    {
    	$pesanan = DB::table('pesanan')
    		->select('pesanan.*', 'bahanbaku.nama_baku')
            ->join('bahanbaku', 'pesanan.id_baku', '=', 'bahanbaku.id_baku')
            ->orderBy('id','desc')
            ->get();
    	return view('pesanan.index',['pesanan' => $pesanan]);
 
    }

    public function print($id)
    {
    	$data = DB::table('pesanan')
    		->select('pesanan.*', 'bahanbaku.*')
    		->join('bahanbaku', 'pesanan.id_baku', '=', 'bahanbaku.id_baku')
    		->where('pesanan.id',$id)->get();
        	// Send data to the view using loadView function of PDF facade
    		$pdf = PDF::loadView('pesanan.data', $data);
    		// If you want to store the generated pdf to the server then you can use the store function
    		$pdf->save(storage_path().'_filename.pdf');
    		// Finally, you can download the file using download function
    		return $pdf->download('customers.pdf');    
    }

    public function beli($id)
    {
    	$pesanan = DB::table('pesanan')
    		->select('pesanan.*', 'bahanbaku.*')
    		->join('bahanbaku', 'pesanan.id_baku', '=', 'bahanbaku.id_baku')
    		->where('pesanan.id',$id)->get();
		return view('pesanan.beli',['pesanan'=>$pesanan]);
    }
    public function setuju($id)
    {
    	$baru = DB::table('pesanan')
    		->select('pesanan.*', 'bahanbaku.*')
    		->join('bahanbaku', 'pesanan.id_baku', '=', 'bahanbaku.id_baku')
    		->where('pesanan.id',$id)->get();
		return view('pesanan.setuju',['baru'=>$baru]);
    }
    public function kirim(Request $request)
    {
    	$this->validate($request, [
      'select_file'  => 'required'
     ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
    	$kuantitas = $request->kuantitas;
    	$stok = $request->stok;
    	DB::table('bahanbaku')->where('id_baku',$request->id_baku)->update([
		'stok' => $kuantitas + $stok,
		
	]);
    	DB::table('pesanan')->where('id',$request->id)->update([
		'status' => 1,
		'kwitansi' => $new_name,
		
	]);	
     
    	DB::table('pembelian')->insert([
		'id_baku' => $request->id_baku,
		'kuantitas' => $request->kuantitas,
		'tgl_transaksi' => date("Y-m-d"),
		'status_pembayaran' => $request->status_pembayaran,

    ]);

    	return redirect('pembelian');
    }
    public function update(Request $request)
    {
    	$this->validate($request, [
      'select_file'  => 'required'
     ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
    	$kuantitas = $request->kuantitas;
    	$stok = $request->stok;
    	DB::table('bahanbaku')->where('id_baku',$request->id_baku)->update([
		'stok' => $kuantitas + $stok,
		
	]);
    	DB::table('pesanan')->where('id',$request->id)->update([
		'status' => 1,
		'kwitansi' => $new_name,
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pesanan');
    }
}
