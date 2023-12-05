<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    protected $fillable = ['name','country_code','city_code','image','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
