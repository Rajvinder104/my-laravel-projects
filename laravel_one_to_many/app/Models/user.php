<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  use HasFactory;
  public $guarded = [];
  public function post()
  {
    //  return $this->hasMany(post::class,'user_id','id');
    return $this->hasMany(post::class);
  }
}
