<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function stocks() {
        return $this->hasMany(Stock::class);
    }
    public function receviedorders() {
        return $this->hasMany(ReceviedOrder::class);
    }
}
