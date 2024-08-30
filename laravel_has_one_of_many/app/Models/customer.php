<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
   public $timestamps = TRUE;

    public function orders(){
        return $this->hasMany(order::class);
    }
    public function oldestorder(){
        return $this->hasOne(order::class)->oldestOfMany();
    }
    public function latestorder(){
        return $this->hasOne(order::class)->latestOfMany();
    }
    public function largestorder(){
        return $this->hasOne(order::class)->ofMany('amount','max');
    }

    public function smallestorder(){
        return $this->hasOne(order::class)->ofMany('amount','min');
    }
}
