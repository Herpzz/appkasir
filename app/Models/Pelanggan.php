<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'alamat',
        'no_telp',
    ];

    public function pelanggan()
    {
        return $this->HasMany(Pelanggan::class, 'id_pelanggan', 'id');
    }
}
