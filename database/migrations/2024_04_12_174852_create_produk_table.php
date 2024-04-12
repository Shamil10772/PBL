<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('deskripsi')->nullable();
            $table->string('kode_produk')->unique();
            $table->decimal('harga_beli', 10, 2);
            $table->string('satuan_pembelian');
            $table->integer('stok_tersedia');
            $table->date('tanggal_pembelian_terakhir')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            $table->string('informasi_distributor')->nullable();
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
