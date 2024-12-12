<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['order_id', 'rating', 'comment', 'is_visible'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}