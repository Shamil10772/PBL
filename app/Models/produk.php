<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'kode_produk',
        'harga_beli',
        'satuan_pembelian',
        'stok_tersedia',
        'tanggal_pembelian_terakhir',
        'tanggal_kadaluarsa',
        'informasi_distributor',
        'catatan_tambahan'
    ];


    protected $dates = ['tanggal_pembelian_terakhir', 'tanggal_kadaluarsa'];
}
