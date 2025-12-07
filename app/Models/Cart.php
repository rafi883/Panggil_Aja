<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    const STATUS_TERTUNDA = 'Tertunda';
    const STATUS_DIPROSES = 'Diproses';
    const STATUS_SELESAI = 'Selesai';
    const STATUS_DIBATALKAN = 'Dibatalkan';
    
    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        'service_id',
        'quantity',
        'status'
    ];



    // Relasi ke Service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
