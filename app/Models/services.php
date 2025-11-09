<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carts;

class services extends Model
{
    public function carts() {
    return $this->hasMany(Carts::class);
}

}
