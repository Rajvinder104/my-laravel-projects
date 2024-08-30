<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function latestcomment()
    {
        return $this->morphOne(Comment::class, 'commentable')
            ->latestOfMany();
    }
    public function oldestcomment()
    {
        return $this->morphOne(Comment::class, 'commentable')
            ->oldestOfMany();
    }
    public function bestcomment()
    {
        return $this->morphOne(Comment::class, 'commentable')
            ->ofMany('likes', 'max');
    }
    public function leastcomment()
    {
        return $this->morphOne(Comment::class, 'commentable')
            ->ofMany('likes', 'min');
    }
}
