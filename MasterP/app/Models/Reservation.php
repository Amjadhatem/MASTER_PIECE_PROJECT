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


        // Function to retrieve the formatted time using Carbon

        public function formattedTime()
    {

        // Use Carbon to parse the 'time' attribute and format it as 'h:i A'

         return Carbon::parse($this->time)->format('h:i A');

    }

    // Define a relationship with the Barbers model

        public function barber()
    {

        // Define a belongsTo relationship, assuming each reservation belongs to a barber
        
        return $this->belongsTo(Barbers::class, 'barber_id'); // Adjust the relationship if needed
    }
}
