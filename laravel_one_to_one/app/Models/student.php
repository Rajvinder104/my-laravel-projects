<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    //this is direct one-to-one relation in between tables
    public function secondtable()
    {
        return $this->hasOne(contact::class);
    }
}
