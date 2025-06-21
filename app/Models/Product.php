<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //field apa aja yaang wajib di isi

    public $fillable=['category_id','name','slug','description','image','price','stok'];

    
     public function category()
    {
        return $this->belogsTo(Category::class);

    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

     public function orders()
    {
        return $this->belongToMany(order::class)->withPivot('qyt', 'price')->withTimestamps();
    }
}
