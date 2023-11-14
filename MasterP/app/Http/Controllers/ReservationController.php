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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barber = Barbers::all(); // Fetch the list of barbers

       // Fetch the current date
       $today = Carbon::now()->format('Y-m-d');
   
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
            function ($attribute, $value, $fail) use ($request) {
                $existingReservation = Reservation::where([
                    'barber_id' => $request->barber_id,
                    'date' => $request->date,
                    'time' => $request->time,
                ])->first();
                if ($existingReservation) {
                    $fail('This barber is already booked for the selected time and date.');
                }
            },
        ],
        'barber_id' => 'required|string',
        'additional_information' => 'nullable|string',
    ]);

    $date = Carbon::parse($data['date']); // Create a Carbon instance for the 'date' field

    $reservation = Reservation::create([
        'name' => $data['name'],
        'phone_number' => $data['phone_number'],
        'date' => $date,
        'time' => $data['time'],
        'barber_id' => $data['barber_id'],
        'additional_information' => $data['additional_information'],
    ]);

    return redirect()->route('success.page');
           
    }

    private function getReservedHours()
{
    $reservedHours = [];

    for ($i = 0; $i < 7; $i++) {
        $date = Carbon::now()->addDays($i)->format('Y-m-d');
        $reservedTimes = Reservation::where('date', $date)->get();

        $hours = [];

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
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
