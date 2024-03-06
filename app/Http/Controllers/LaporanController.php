<?php
use Illuminate\Http\Request;
use App\Models\Laporantransaksi;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
// use PDF;


class LaporanController extends Controller
{
    public function index()
    {
        $laporanTransaksi = Laporantransaksi::all();
        return view('laporantransaksi.index', ['data' => $laporanTransaksi]);
        
    }

    // public function downloadpdf()
    // {
    //    $laporanTransaksi = Laporantransaksi::all(); 
    // $pdf = PDF::loadview('laporantransaksi.laporan', ['data' => $laporanTransaksi]);
    // return $pdf->download('laporan_transaksi.pdf');
    // }
    // public function cetakLaporan(Request $request)
    // {
    //     $laporanTransaksi = Laporantransaksi::all(); // Mengambil semua data laporan transaksi
    //     $data = [
    //         'title' => 'Laporan Pembayaran',
    //         'date' => date('d/m/Y'),
    //         'laporanTransaksi' => $laporanTransaksi
    //     ];

    //     if ($request->has('download')) {
    //         $pdf = FPDF::loadView('laporantransaksi.laporan', $data); // Sesuaikan dengan view Anda
    //         return $pdf->download('laporan_transaksi.pdf');
    //     }

    //     return view('laporantransaksi.index', $data); // Sesuaikan dengan view Anda
    // }
}
