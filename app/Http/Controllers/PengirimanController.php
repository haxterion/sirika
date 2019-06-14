<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengirimanController extends Controller
{ 
    public function __construct()
{
    $this->middleware('auth');    
 
}
    public function index()
    {
    	$pengiriman = DB::table('pengiriman')
            ->select('pengiriman.*', 'users.*', 'supplier.*')
            ->join('users', 'pengiriman.operator', '=', 'users.id')
            ->join('supplier', 'pengiriman.supplier', '=', 'supplier.id_sup')
            ->orderBy('id_pemb','desc')
            ->get();
    	return view('pengiriman.index',['pengiriman' => $pengiriman]);
 
    }
    public function track($id)
    {
    	$pengiriman = DB::table('pengiriman')
            ->select('pembelian.*', 'bahanbaku.*', 'pengiriman.*')
            ->join('pembelian', 'pengiriman.id_pemb', '=', 'pembelian.id_pemb')
            ->join('bahanbaku', 'pembelian.id_baku', '=', 'bahanbaku.id_baku')
            ->where('id',$id)
            ->get();
    	return view('pengiriman.track',['pengiriman' => $pengiriman]);
 
    }
}
