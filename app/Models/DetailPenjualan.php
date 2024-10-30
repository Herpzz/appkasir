<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jumlah',
        'subtotal',
        'id_penjualan',
        'id_produk',
    ];

    public function penjualan()
    {
        return $this->BelongsTo(Penjualan::class, 'id_pelanggan', 'id');
    }

    public function produk()
    {
        return $this->BelongsTo(produk::class, 'id_produk', 'id');
    }
}
