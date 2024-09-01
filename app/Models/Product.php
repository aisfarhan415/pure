<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock_quantity'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
