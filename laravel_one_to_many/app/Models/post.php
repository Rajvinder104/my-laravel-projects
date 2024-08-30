<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
   public $guarded = [];

    public $timestamps = true;

    public function user(){
        //  return $this->hasMany(post::class,'user_id','id');
          return $this->belongsTo(user::class);
      }
}
