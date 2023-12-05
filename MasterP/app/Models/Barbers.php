<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbers extends Model
{
    use HasFactory;

    // Specify the fillable attributes for mass assignment

    protected $fillable = [
        'barber_name',
        'image_path',
        'phoneNumber',
        'barber_bio',
    ];

    // Define a relationship with the Reservation model

    public function reservations()
    {

         // A barber has many reservations
        return $this->hasMany(Reservation::class);
    }
}
