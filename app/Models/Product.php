<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //field apa aja yaang wajib di isi

    public $fillable=['category_id','name','slug','description','image','price','stock'];

    
     public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

     public function orders()
    {
        return $this->belongsToMany(order::class)->withPivot('qty', 'price')->withTimestamps();
    }


     
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

     //mengantikan kunci id menjadi slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
