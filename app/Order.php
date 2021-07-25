<?php

namespace App;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;

    public function order_products(){
        
    	return $this->hasMany('App\OrderProduct','order_id');
    }
}
