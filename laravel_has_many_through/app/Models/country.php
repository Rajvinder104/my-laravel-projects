<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(user::class);
    }

    public function post()
    {
        return $this->hasManyThrough(
            Post::class,
            user::class
        );
    }
}
