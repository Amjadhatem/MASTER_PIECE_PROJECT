<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Barbers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rule;



class ReservationController extends Controller
{
    
    public function index()
    {

         // Fetch all reservations and order them by creation date in descending order

        $reservation = Reservation::orderBy('created_at', 'DESC')->get();
       
        // Pass the reservations data to the 'appointment.index' view

        return view('appointment.index' , compact('reservation'));

    }

   
    public function create()
{
    // Fetch the list of barbers

    $barber = Barbers::all(); 

    // Fetch reserved times for today

    $reservedTimes = $this->getReservedHours();

    // Initialize error message variable

    $errorMessage = '';

     // Pass data to the 'user.appointment' view

    return view('user.appointment', compact('barber', 'reservedTimes', 'errorMessage'));

}

    
    public function store(Request $request)
    {
        // Validate the incoming data
        $data = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'date' => ['required', 'date', 'after_or_equal:' . Carbon::now(), 'before_or_equal:' . Carbon::now()->addDays(7)],
            'time' => [
                'required',
                'string',
                Rule::unique('reservations')
                    ->where(function ($query) use ($request) {
                        return $query
                            ->where('date', $request->date)
                            ->where('time', $request->time)
                            ->where('barber_id', $request->barber_id);
                    })
                    ->ignore($request->id),
            ],
            'barber_id' => 'required|string',
            'additional_information' => 'nullable|string',
        ]);
    
     // Check if there's an existing reservation for the same date, time, and barber

    $existingReservation = Reservation::where('date', $request->date)
    ->where('time', $request->time)
    ->where('barber_id', $request->barber_id)
    ->first();
    
    if ($existingReservation && $existingReservation->id != $request->id) {

        // Reservation already exists for the chosen date, time, and barber

        $errorMessage = 'This time slot is already booked for the selected barber.';
        return redirect()->back()->with(['errorMessage' => $errorMessage]);
    }
    
        // Create a Carbon instance for the 'date' field

        $date = Carbon::parse($data['date']);
    
        // Attempt to create the reservation

        try {
            $reservation = Reservation::create([
                'name' => $data['name'],
                'phone_number' => $data['phone_number'],
                'date' => $date,
                'time' => $data['time'],
                'barber_id' => $data['barber_id'],
                'additional_information' => $data['additional_information'],
            ]);
    
            return redirect()->route('success.page');
        } catch (\Exception $e) {

            // Handle the exception, log it, or return an error response

            $errorMessage = 'An error occurred while trying to create the reservation.';
            dd($existingReservation, $request->all());
            return redirect()->back()->with(['errorMessage' => $errorMessage]);
        }
    }

    // * Helper function to get reserved hours for the next 7 days.

    public function getReservedHours()
    {
        $reservedHours = [];
    
        // Loop through the next 7 days

        for ($i = 0; $i < 7; $i++) {

            // Get the date for the current day
            $date = Carbon::now()->addDays($i)->format('Y-m-d');

            // Fetch reserved times for the current day
            $reservedTimes = Reservation::where('date', $date)->get();
    
            $hours = [];
    
               // Loop through reserved times for each day
                foreach ($reservedTimes as $reservation) {

                    // Format the time as AM/PM
                    $formattedTime = ($reservation->time <= 12) ? $reservation->time . ' AM' : ($reservation->time - 12) . ' PM';
    
                // Add reserved hours to the array
                $hours[] = [
                    'hour' => $reservation->time,
                    'formattedTime' => $formattedTime,
                    'barberName' => $reservation->barber->barber_name, // Assuming you have a relationship set up
                ];
            }
    
            // Add hours to the main array
            $reservedHours[] = [
                'date' => $date,
                'hours' => $hours,
            ];
        }
    
        return $reservedHours;
    }

    private function calculateReservedHours($reservedTimes)
    {
        $reservedHours = [];

        foreach ($reservedTimes as $time) {
            $formattedTime = ($time <= 12) ? $time . ' AM' : ($time - 12) . ' PM';
            $reservedHours[] = ['hour' => $time, 'formattedTime' => $formattedTime];
        }

        return $reservedHours;
    }

   
    public function show(string $reservation)
    {

        // Find and retrieve the specified reservation

        $reservation = Reservation::findOrFail($reservation);
  
         // Pass the reservation data to the 'appointment.show' view

        return view('appointment.show', compact('reservation'));
    }

   
    public function edit(string $reservation)
    {

        // Find and retrieve the specified reservation

        $reservation = Reservation::findOrFail($reservation);
  
        // Pass the reservation data to the 'appointment.edit' view

        return view('appointment.edit', compact('reservation'));
    }

    
    public function update(Request $request, string $reservation)
    {

        // Find and retrieve the specified reservation

        $reservation = Reservation::findOrFail($reservation);
  
        // Update the reservation with the new data

        $reservation->update($request->all());
  
        // Redirect to the reservation index page with a success message

        return redirect(route('Rese'))->with('success', 'reservation updated successfully');
   
    }

    
    public function destroy(string $reservation)
    {

        // Find and retrieve the specified reservation

        $reservation = Reservation::findOrFail($reservation);
  
         // Delete the reservation

        $reservation->delete();
  
        // Redirect to the reservation index page with a success message

        return redirect(route('Rese'))->with('success', 'reservation deleted successfully');
    }
}
