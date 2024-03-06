<?php


use App\Http\Controllers\LaporantransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use LaporanController as GlobalLaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/home',[produkController::class,'index']);
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('kategori',kategoriController::class);
    Route::resource('transaksi', transaksiController::class);
    // Route::resource('laporan', LaporanController::class);
});
//Report pdf
// Route::get('/download', [LaporanController::class, 'downloadpdf']);

Route::resource('produk',ProdukController::class);
Route::resource('dashboard',DashboardController::class);
// Route::resource('kategori',KategoriController::class);
Route::resource('transaksi',TransaksiController::class);
// Route::resource('laporan',LaporanController::class);
// Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);




Route::get('laporantransaksi', [LaporantransaksiController::class, 'index'])->name('laporantransaksi.index');



Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');




// Route::get('/', function () {
//     return view('welcome');
// });
