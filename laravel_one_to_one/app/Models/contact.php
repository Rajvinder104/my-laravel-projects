<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

// this is a reverse relation in between two tables
    public function getstudent(){
        return $this->belongsTo(student::class);
    }


}
