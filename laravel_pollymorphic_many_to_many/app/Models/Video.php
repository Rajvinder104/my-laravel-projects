<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
        protected $guarded = [];
        public $timestamps = false;

    public function Tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
