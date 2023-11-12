<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbers extends Model
{
    use HasFactory;
    protected $fillable = [
        'barber_name',
        'image_path',
        'phoneNumber',
        'barber_bio',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
