<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use Session;

class DeliveryAddress extends Model
{
    use HasFactory;
    public static function deliveryAddresses(){
    	$user_id = Auth::User()->id;
    	$deliveryAddresses = DeliveryAddress::where('user_id',$user_id)->get()->toArray();
    	return $deliveryAddresses;
    }
}
