<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceviedOrder extends Model
{
    public function item() {
        return $this->belongsTo(Item::class);
    }
    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
