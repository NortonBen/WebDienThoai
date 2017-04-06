<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['product_id','price','count'];

    public  function Product(){
        return $this->belongsTo(Product::class);
    }

    public  function Order(){
        return $this->belongsTo(Order::class);
    }
}
