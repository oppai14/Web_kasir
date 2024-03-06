<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Mengambil nilai ID pengguna
        // $userId = $user->name;
        
        // // Dump nilai ID untuk debugging
        // var_dump($userId);die();
        $totalProduk = produk::count();
        $totalKategori = kategori::count();
        return view('dashboard.index', compact('totalProduk', 'totalKategori'));
    }
    // public function __construct()
    // {
    // $this->middleware('auth');
    // }

}



