<?php

namespace App\Models;

use App\Models\Destinations;
use App\Models\Flights;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;
    protected $fillable = ['username','email','password'];
    public function destinations(){
        return $this->hasMany(Destinations::class);
    }

    public function flights(){
        return $this->hasMany(Flights::class);
    }
}
