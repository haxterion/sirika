<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengirimanController extends Controller
{ 
    public function __construct()
{
    $this->middleware('auth');    
    $this->middleware('supplier');
}
    public function index()
    {
    	$pengiriman = DB::table('pengiriman')->get();
    	return view('pengiriman.index',['pengiriman' => $pengiriman]);
 
    }
    public function track($id)
    {
    	$pengiriman = DB::table('pengiriman')->where('id',$id)->get();
    	return view('pengiriman.track',['pengiriman' => $pengiriman]);
 
    }
}
