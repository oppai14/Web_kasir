<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporantransaksi;

class LaporanTransaksiController extends Controller
{
    public function index(){
        $LaporanTransaksi =  Laporantransaksi::all();
        return view('laporantransaksi.index',['data' => $LaporanTransaksi]);
    }
}
