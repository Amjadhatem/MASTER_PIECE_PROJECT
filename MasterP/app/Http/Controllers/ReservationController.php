<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Barbers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rule;



class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation = Reservation::orderBy('created_at', 'DESC')->get();
       
        return view('appointment.index' , compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $barber = Barbers::all(); // Fetch the list of barbers

    // Fetch reserved times for today
    $reservedTimes = $this->getReservedHours();

    $errorMessage = '';

    return view('user.appointment', compact('barber', 'reservedTimes', 'errorMessage'));
}

    /**
     * Store a newly created resource in storage.
     */
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
    
        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::now()->addDays($i)->format('Y-m-d');
            $reservedTimes = Reservation::where('date', $date)->get();
    
            $hours = [];
    
               // Loop through reserved times for each day
                foreach ($reservedTimes as $reservation) {
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

    /**
     * Display the specified resource.
     */
    public function show(string $reservation)
    {
        $reservation = Reservation::findOrFail($reservation);
  
        return view('appointment.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $reservation)
    {
        $reservation = Reservation::findOrFail($reservation);
  
        return view('appointment.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $reservation)
    {
        $reservation = Reservation::findOrFail($reservation);
  
        $reservation->update($request->all());
  
        return redirect(route('Rese'))->with('success', 'reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $reservation)
    {
        $reservation = Reservation::findOrFail($reservation);
  
        $reservation->delete();
  
        return redirect(route('Rese'))->with('success', 'reservation deleted successfully');
    }
}
