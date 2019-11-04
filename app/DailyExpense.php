<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyExpense extends Model
{
    protected $fillable = ['staff_id', 'amount', 'date','description'];
    public function staff() {
        return $this->belongsTo(Staff::class);
    }
}
