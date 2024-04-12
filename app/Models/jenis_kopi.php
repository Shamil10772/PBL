<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kopi extends Model
{
    protected $table = 'jenis_kopi';

    protected $fillable = [
        'nama_jenis_kopi',
    ];

    public function produk()
    {
        return $this->hasMany(produk::class);
    }
}
