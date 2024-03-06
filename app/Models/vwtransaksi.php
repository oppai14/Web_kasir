<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporantransaksi extends Model
{
    use HasFactory;
    protected $table = 'vw_transaksi';
    // protected $fillable = [
    //     'id_kasir','nama_kasir','total','bayar','kembalian','tanggal'
    // ];
}
