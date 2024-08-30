<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->hasOne(Company::class);
    }
    public function PhoneNumber()
    {
        return $this->hasOneThrough(Phone_number::class, Company::class);
        // return $this->hasOneThrough(Phone_number::class, Company::class,'user_id','company_id','id','id');
    }
}
