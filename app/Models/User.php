<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Carts;
use App\Models\Checkouts;

class User extends Authenticatable
{
    protected $table ="users";
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function carts() {
    return $this->hasMany(Carts::class);
}

public function checkouts() {
    return $this->hasMany(Checkouts::class);
}

}

