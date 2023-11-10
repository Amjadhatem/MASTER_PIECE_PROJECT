<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Services::orderBy('created_at', 'DESC')->get();
       
        return view('crud.index' , compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
            'service_bio' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        
        $sp = Services::create([
            'service_name' => $request->input('service_name'),
            'image_path' => $imagePath,
            'service_bio' => $request->input('service_bio'),
            'service_description' => $request->input('service_description'),
        ]);


        return redirect(route('services'))->with('success', 'service added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Services::findOrFail($id);
  
        return view('crud.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Services::findOrFail($id);
  
        return view('crud.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::findOrFail($request->id);
        

        if ($request->hasFile('image_path')) {
            // dd($request->all());

            $imagePath = $request->file('image_path')->store('images', 'public');
            
            $service->image_path = $imagePath;
        }else {
            $imagePath = null;
        }
        // $service->update($request->all());
  
        // return redirect(route('services'))->with('success', 'service updated successfully');
        $service->service_name = $request->input('service_name');   
        $service->service_bio = $request->input('service_bio');
        $service->service_description = $request->input('service_description');
    
        // Optional: You can add validation for the date here if needed
    
        // Save the changes to the database
        $service->update();
    
        return redirect()->route('services')->with('success', 'Blog updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);
  
        $service->delete();
  
        return redirect(route('services'))->with('success', 'service deleted successfully');
    }

    public function displayServices()
    {
        $service = Services::orderBy('created_at', 'DESC')->get();
        return view('user.welcome', compact('service'));
    }
}
