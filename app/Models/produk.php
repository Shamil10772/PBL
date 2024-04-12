<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'id_jenis_kopi',
        'id_distributor',
    ];

    public function jenis_kopi()
    {
        return $this->belongsTo(jenis_kopi::class);
    }

    public function distributor()
    {
        return $this->belongsTo(distributor::class);
    }
}
