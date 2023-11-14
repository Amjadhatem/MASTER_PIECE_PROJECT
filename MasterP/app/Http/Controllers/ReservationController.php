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

        // Limit the date selection to the next seven days
        $startDate = Carbon::now();
        $endDate = Carbon::now()->addDays(7);

        // Fetch available dates within the next seven days
        $availableDates = Reservation::whereBetween('date', [$startDate, $endDate])->pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d'); // Adjust the date format
        })
        ->toArray();

         // Fetch reserved times for the selected date
    $reservedTimes = [];
    $selectedDate = Carbon::now()->format('Y-m-d');
    if (in_array($selectedDate, $availableDates)) {
        $reservedTimes = Reservation::where('date', $selectedDate)->pluck('time')->toArray();
    }
        $errorMessage = '';


        return view('user.appointment', compact('barber', 'availableDates', 'reservedTimes', 'errorMessage'));
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
                        Rule::unique('reservations')->where(function ($query) use ($request) {
                            return $query->where([
                                'date' => $request->date,
                                'time' => $request->time,
                            ]);
                        }),
                    ],
                    'barber_id' => 'required|string',
                    'additional_information' => 'nullable|string',
                    
                ]);

                
        
                $date = Carbon::parse($data['date']); // Create a Carbon instance for the 'blog_date' field
        
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
