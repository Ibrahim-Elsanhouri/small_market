<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function getTotalPriceAttribute() {
        return $this->price -  $this->discount;
    }
}
