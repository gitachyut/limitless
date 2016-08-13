<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function agents(){
    return $this->belongsToMany(Agent::class,'agent_product');
  }

  public function buyers(){
    return $this->belongsToMany(Buyer::class,'buyer_product');
  }
  
}
