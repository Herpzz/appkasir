<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'total',
        'id_pelanggan',

    ];

    public function pelanggan()
    {
        return $this->BelongsTo(Pelanggan::class, 'id_pelanggan', 'id');
    }
}
