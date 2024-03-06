<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use FPDF;


class KategoriController extends Controller
{
    // Menampilkan semua transaksi
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.index', ['data' => $kategori]);
    }

    // Menampilkan formulir untuk membuat produk baru
    public function create()
    {
        // Jika Anda memiliki data yang perlu dipassing ke formulir, Anda bisa menambahkannya di sini
        return view('kategori.create');
    }

    // Menyimpan transaksi baru yang dibuat
    public function store(Request $request)
    {
        // Validasi data dari request
        $request->validate([
            // Sesuaikan aturan validasi sesuai kebutuhan Anda
            'nama' => 'required',
            // Tambahkan aturan validasi lainnya
        ]);

        // Buat kategori baru berdasarkan data yang diterima dari request
        kategori::create([
            'nama' => $request->nama,
            // Isi ini sesuai dengan kolom yang ada di tabel transaksi
        ]);

        // Redirect ke halaman indeks kategori dengan pesan sukses
        return redirect()->route('kategori.index')->with('success', 'kategori berhasil ditambahkan.');
    }

    // Menampilkan detail kategori
    public function show($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.show', ['kategori' => $kategori]);
    }
    // Menampilkan formulir untuk mengedit kategori
    public function edit($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.edit', ['data' => $kategori]);
    }

    // public function generatePDF()
    // {
    //     $pdf = new FPDF();
    //     $pdf->AddPage();
    //     $pdf->SetFont('Arial', 'B', 16);
    //     $pdf->Cell(40, 10, 'Hello World!');
    //     $pdf->Output();
    //     exit;
    // }

    // Menyimpan perubahan pada kategori yang diubah
    public function update(Request $request, $id)
    {
        // Validasi data dari request
        $request->validate([
            // Sesuaikan aturan validasi sesuai kebutuhan Anda
            'nama' => 'required',
            // Tambahkan aturan validasi lainnya
        ]);

        // Ambil transaksi yang akan diubah
        $kategori = kategori::findOrFail($id);

        // Perbarui data kategori berdasarkan data yang diterima dari request
        $kategori->update([
            'nama' => $request->nama,
            // Isi ini sesuai dengan kolom yang ada di tabel kategori
        ]);

        // Redirect ke halaman indeks transaksi dengan pesan sukses
        return redirect()->route('kategori.index')->with('success', 'kategori berhasil diperbarui.');
    }

    // Menghapus kategori
    public function destroy($id)
    {
        // Cari kategori berdasarkan ID dan hapus
        kategori::findOrFail($id)->delete();

        // Redirect ke halaman indeks kategori dengan pesan sukses
        return redirect()->route('kategori.index')->with('success', 'kategori berhasil dihapus.');
    }
}
