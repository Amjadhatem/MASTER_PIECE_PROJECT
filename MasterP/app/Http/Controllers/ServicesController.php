<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
   
    public function index()
    {

    //  --- Fetch all services from the database, ordered by creation date --- 

        $service = Services::orderBy('created_at', 'DESC')->get();
       
    //  --- Return the view with the list of services --- 

        return view('crud.index' , compact('service'));

    }


    public function create()
    {

    //  --- Return the view for creating a new service --- 
        return view('crud.create');

    }

    
    public function store(Request $request)
    {

        // Validate the incoming request data ---

        $data = $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
            'service_bio' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
        ]);

        // Check if an image file is present in the request

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        // Create a new service record in the database

        $sp = Services::create([
            'service_name' => $request->input('service_name'),
            'image_path' => $imagePath,
            'service_bio' => $request->input('service_bio'),
            'service_description' => $request->input('service_description'),
        ]);
        
         // Redirect to the services index page with a success message

        return redirect(route('services'))->with('success', 'service added successfully');

    }

    
    public function show(string $id)
    {
        // Find the service with the given ID

        $service = Services::findOrFail($id);
  
        // Return the view with details of the specified service

        return view('crud.show', compact('service'));
    }

   
    public function edit(string $id)
    {
        // Find the service with the given ID for editing

        $service = Services::findOrFail($id);
  
        // Return the view for editing the specified service

        return view('crud.edit', compact('service'));
    }


    public function update(Request $request, string $id)
    {
        // Find the service with the given ID

        $service = Services::findOrFail($request->id);
        
        // Check if an image file is present in the request

        if ($request->hasFile('image_path')) {

            // Store the uploaded image in the public 'images' directory

            $imagePath = $request->file('image_path')->store('images', 'public');
            
            $service->image_path = $imagePath;
        }else {
            $imagePath = null;
        }
        
        // Update other fields of the service

        $service->service_name = $request->input('service_name');   
        $service->service_bio = $request->input('service_bio');
        $service->service_description = $request->input('service_description');
        
        // Save the changes to the database
        $service->update();
    
         // Redirect to the services index page with a success message

        return redirect()->route('services')->with('success', 'service updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the service with the given ID for deletion

        $service = Services::findOrFail($id);
  
        // Delete the service record from the database

        $service->delete();
  
        // Redirect to the services index page with a success message
        
        return redirect(route('services'))->with('success', 'service deleted successfully');
    }

       
}
