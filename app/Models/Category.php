<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected  $fillable = ['name','slug','image','icon'];

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
    /* entre categorías y productos tenemos una relación uno
    a muchos, solo que no es directa, ya que la obtenemos a
     través de subcategories.*/
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
