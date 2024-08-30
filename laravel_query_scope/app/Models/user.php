<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;

class user extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        // static::addGlobalScope('userdetails', function (Builder $builder) {
        //     $builder->where('status', 1);
        // });


        // ehh dusra tarika scope bonon da iss lyi assi ikk alag to file create karde aa jiss vich assi apna scope add karde aa
        static::addGlobalScope(new UserScope);
    }
    public function posts()
    {
        return $this->hasMany(post::class);
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function scopeCity($query, $cityname)
    {
        return $query->whereIn('city', $cityname);
    }
    public function scopesort($query)
    {
        return $query->orderby('name', 'asc');
    }
}
