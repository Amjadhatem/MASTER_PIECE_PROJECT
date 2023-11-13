<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'date',
        'time',
        'barber_id',
        'additional_information'
        ];

        public function barber()
    {
        return $this->belongsTo(Barbers::class);
    }
}