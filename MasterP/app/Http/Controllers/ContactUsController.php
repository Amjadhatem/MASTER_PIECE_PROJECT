<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
  
    public function index()
    {

        // Fetch all contact us entries and order them by creation date in descending order

        $con = ContactUs::orderBy('created_at', 'DESC')->get();
       
        // Pass the contact us data to the 'Contact.index' view

        return view('Contact.index' , compact('con'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {

        // Validate the incoming data

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|numeric',
            'message' => 'required',
        ]);
    
        // Create a new ContactUs entry with the validated data

        $con = ContactUs::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'message' => $data['message'],
        ]);
    
        // Redirect to a success page after successful entry creation

        return redirect(route('successCon.page'));
    }

    
    public function show(string $contactUs)
    {

        // Find and retrieve the specified contact us entry

        $con = ContactUs::findOrFail($contactUs);
  
        // Pass the contact us data to the 'Contact.show' view

        return view('Contact.show', compact('con'));
    }

   
    public function edit(string $contactUs)
    {

        // Find and retrieve the specified contact us entry

        $con = ContactUs::findOrFail($contactUs);
  
        // Pass the contact us data to the 'Contact.edit' view

        return view('Contact.edit', compact('con'));
    }

    
    public function update(Request $request, string $contactUs)
    {

        // Find and retrieve the specified contact us entry

        $con = ContactUs::findOrFail($contactUs);
  
        // Update the contact us entry with the new data

        $con->update($request->all());
  
        // Redirect to the contact us index page with a success message
        
        return redirect(route('con'))->with('success', 'reservation updated successfully');
    }

   
    public function destroy(string $contactUs)
    {

        // Find and retrieve the specified contact us entry

        $con = ContactUs::findOrFail($contactUs);
  
        // Delete the contact us entry

        $con->delete();
  
        // Redirect to the contact us index page with a success message

        return redirect(route('con'))->with('success', 'reservation deleted successfully');
    }
}
