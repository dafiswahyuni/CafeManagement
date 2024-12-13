<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name', 'description', 'is_active'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}