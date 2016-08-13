<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  protected $fillable = [
      'name', 'email', 'age','bio',
  ];

  public function products(){
    return $this->belongsToMany(Product::class,'agent_product');
  }
}
