<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','image','description','detail','price','view','category_id'];

    public  function  Category(){
        return $this->belongsTo(Category::class);
    }
}
