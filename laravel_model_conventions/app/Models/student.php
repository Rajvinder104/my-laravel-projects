<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'my_table';
    protected $primaryKey = 'student_id';
    protected $attributes = [
        'age' => 22 
    ];
    // const CREATED_AT = 'creation_date';
    // const  UPDATED_AT = 'updated_date';
}
