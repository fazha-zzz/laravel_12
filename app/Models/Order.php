<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['user_id', 'total_price', 'order_code', 'status'];

     public function user()
    {
        return $this->belongTo(User::class);
    }

     public function products()
    {
        return $this->belongToMany(Product::class)->withPivot('qyt', 'price')->withTimestamps();
    }
}
