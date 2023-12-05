<?php

namespace App\Http\Controllers;

use App\Models\Barbers;
use Illuminate\Http\Request;

class BarbersController extends Controller
{
    
    public function index()
    {

        // Fetch all barbers and order them by creation date in descending order

        $barber = Barbers::orderBy('created_at', 'DESC')->get();
       
        // Pass the barber data to the 'barbers.index' view

        return view('barbers.index' , compact('barber'));
    }

   
    public function create()
    {

        // Display the view for creating a new barber

        return view('barbers.create');

    }

    
    public function store(Request $request)
    {

         // Validate the incoming data
        $data = $request->validate([
            'barber_name' => 'required',
            'phoneNumber' => 'required|numeric|digits:10',
            'barber_bio' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
        ]);

        // Handle image upload if an image is provided

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        // Create a new barber entry with the validated data

        $barber = Barbers::create([
            'barber_name' => $data['barber_name'], // Use the validated data
            'image_path' => $imagePath,
            'phoneNumber' => $data['phoneNumber'], // Use the validated data
            'barber_bio' => $data['barber_bio'], // Use the validated data
        ]);

        // Redirect to the 'Barbers' route with a success message

        return redirect(route('Barbers'))->with('success', 'service added successfully');


    }

    
    public function show(string $barbers)
    {

        // Find and retrieve the specified barber entry

        $barber = Barbers::findOrFail($barbers);
  
        // Pass the barber data to the 'barbers.show' view

        return view('barbers.show', compact('barber'));
    }

    
    public function edit(string $barbers)
    {

         // Find and retrieve the specified barber entry

        $barber = Barbers::findOrFail($barbers);
  
         // Pass the barber data to the 'barbers.edit' view

        return view('barbers.edit', compact('barber'));
    }

   
    public function update(Request $request, string $barbers)
    {

        // Find and retrieve the specified barber entry

        $barber = Barbers::findOrFail($request->id);

        // Handle image upload if a new image is provided

        if ($request->hasFile('image_path')) {
            // dd($request->all());

            $imagePath = $request->file('image_path')->store('images', 'public');
            
            $barber->image_path = $imagePath;
        }else {
            $imagePath = null;
        }

          // Update the other fields

        $barber->barber_name = $request->input('barber_name');   
        $barber->phoneNumber = $request->input('phoneNumber');
        $barber->barber_bio = $request->input('barber_bio');
    
        // Save the changes to the database
        $barber->update();
    
        // Redirect to the 'Barbers' route with a success message

        return redirect()->route('Barbers')->with('success', 'Blog updated successfully');
    }

    
    public function destroy(string $barbers)
    {

        // Find and retrieve the specified barber entry

        $barber = Barbers::findOrFail($barbers);
  
        // Delete the barber entry

        $barber->delete();
  
        // Redirect to the 'Barbers' route with a success message
        
        return redirect(route('Barbers'))->with('success', 'service deleted successfully');
    }

}
