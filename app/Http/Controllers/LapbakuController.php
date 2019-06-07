<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LapbakuController extends Controller
{
    public function index()
    {
    $sup = DB::select("select b.*,(select nama_sup from supplier where id_sup=b.id_sup) as nama_sup from lapbaku b");
    $lapbaku = DB::select("select b.*,(select nama_baku from bahanbaku where id_baku=b.id_baku) as nama_baku from lapbaku b");
    	return view('lapbaku.index')->with(compact('sup','lapbaku'));
    }

    public function tambah()
	{
 	$bahanbaku = DB::table('bahanbaku')->get();
    $supplier = DB::table('supplier')->get();
	// memanggil view tambah
	return view('lapbaku.tambah')->with(compact('bahanbaku','supplier'));
	}

    public function store(Request $request)
    {
    // insert data ke table supplier
    DB::table('lapbaku')->insert([
        'id_baku' => $request->id_baku,
        'hrg_beli' => $request->hrg_beli,
        'id_sup' => $request->id_sup,
    ]);
    // alihkan halaman ke halaman supplier
    return redirect('/lapbaku');
 
    }
}
