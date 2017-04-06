<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','price','state'];


    public  function  User(){
        return $this->belongsTo(User::class);
    }

    public  function  Detail(){
        return $this->hasMany(OrderDetail::class, 'order_id','id');
    }
}
