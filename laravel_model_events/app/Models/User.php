<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // protected static function booted(): void
    // {
    //     static::deleted(function ($query) {
    //         $query->posts()->delete();
    //     });

    //     static::created(function ($query) {
    //     });

    //     static::deleted(function ($query) {
    //     });
    // }
}
