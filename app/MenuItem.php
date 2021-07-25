<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\SubMenuItem;


class MenuItem extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'link',

    ];

    public function submenu(){

        return $this->hasMany('App\SubMenuItem')->where('status','Enabled');
    }


  
}
