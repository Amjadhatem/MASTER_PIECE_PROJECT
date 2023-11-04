<?php

namespace App\Http\Controllers;

use App\Models\Barbers;
use Illuminate\Http\Request;

class BarbersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barber = Barbers::orderBy('created_at', 'DESC')->get();
       
        return view('barbers.index' , compact('barber'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barbers.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'barber_name' => 'required',
            'phoneNumber' => 'required|integer',
            'barber_bio' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        $barber = Barbers::create([
            'barber_name' => $data['barber_name'], // Use the validated data
            'image_path' => $imagePath,
            'phoneNumber' => $data['phoneNumber'], // Use the validated data
            'barber_bio' => $data['barber_bio'], // Use the validated data
        ]);

        return redirect(route('Barbers'))->with('success', 'service added successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $barbers)
    {
        $barber = Barbers::findOrFail($barbers);
  
        return view('barbers.show', compact('barber'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $barbers)
    {
        $barber = Barbers::findOrFail($barbers);
  
        return view('barbers.edit', compact('barber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $barbers)
    {
        $barber = Barbers::findOrFail($request->id);

        if ($request->hasFile('image_path')) {
            // dd($request->all());

            $imagePath = $request->file('image_path')->store('images', 'public');
            
            $barber->image_path = $imagePath;
        }else {
            $imagePath = null;
        }

        $barber->barber_name = $request->input('barber_name');   
        $barber->phoneNumber = $request->input('phoneNumber');
        $barber->barber_bio = $request->input('barber_bio');
    
        // Optional: You can add validation for the date here if needed
    
        // Save the changes to the database
        $barber->update();
    
        return redirect()->route('Barbers')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $barbers)
    {
        $barber = Barbers::findOrFail($barbers);
  
        $barber->delete();
  
        return redirect(route('Barbers'))->with('success', 'service deleted successfully');
    }

}
