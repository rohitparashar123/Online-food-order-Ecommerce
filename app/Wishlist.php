<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use Auth;
use Session;

class Wishlist extends Model
{
    use HasFactory;

      public static function wishlistcount(){
        if(Auth::check()){
        $user_email = Auth::user()->email;
        $wishlistcount = DB::table('wishlists')->where('u_email',$user_email)->sum('product_quantity');
        
         return $wishlistcount;
    }

    }
}
