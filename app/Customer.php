<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'address', 'phone','poc'];

    public function receviedorders() {
        return $this->hasMany(ReceviedOrder::class);
    }
}
