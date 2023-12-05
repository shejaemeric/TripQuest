<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','origin','destination','airline','departure_at','return_at','expires_at','price','flight_number','transfers','date'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
