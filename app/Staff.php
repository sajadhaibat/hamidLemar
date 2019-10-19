<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function dailyexpenses() {
        return $this->hasMany(DailyExpense::class);
    }
}
