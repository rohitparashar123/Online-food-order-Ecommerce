<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use Auth;
use Session; 

class Product extends Model
{
    public static function cartCount(){
        if(Auth::check()){
        $user_email = Auth::user()->email;
        $cartCount = DB::table('carts')->where('user_email',$user_email)->sum('product_quantity');
    }
    else{
        $session_id = Session::getId();
        $cartCount = DB::table('carts')->where('session_id',$session_id)->sum('product_quantity');
    }

    return $cartCount;


}
public function products(){
    return 'product_name';
}
}
