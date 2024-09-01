<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }
}
