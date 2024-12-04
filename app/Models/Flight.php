<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['flight_number', 'departure', 'destination', 'departure_time', 'seats_available'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

