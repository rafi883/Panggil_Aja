<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services'; // nama tabel

    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'harga',
        'gambar',
    ];

    public function carts() {
        return $this->hasMany(Carts::class);
}
}
