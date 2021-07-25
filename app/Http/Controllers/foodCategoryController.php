<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class foodCategoryController extends Controller
{
     public function punjabifood(){
        return view('front.punjabi-food');
     }
}
