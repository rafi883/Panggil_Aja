<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table="orders";
    const STATUS_TERTUNDA = 'tertunda';
    const STATUS_DIPROSES = 'diproses';
    const STATUS_SELESAI = 'selesai';
    const STATUS_DIBATALKAN = 'dibatalkan';

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];

    // 1 order punya banyak item
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // order milik user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
