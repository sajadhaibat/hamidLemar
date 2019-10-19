<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function receviedorders() {
        return $this->hasMany(ReceviedOrder::class);
    }
}
